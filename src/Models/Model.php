<?php

namespace App\Models;

use App\Database\Database;

abstract class Model extends Database {

    protected $table;
    
    public function all()
    {
        $query = "SELECT * FROM ".$this->table;
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function findOrDie(int $id)
    {
        $query = "SELECT * FROM ".$this->table." WHERE id = :id;";
        $statement = $this->pdo->prepare($query);
        $params['id'] = $id;
        $statement->execute($params);
        
        return $this->dieIfNoResults($statement->fetch());
    }

    public function findBy($array)
    {
       
        $query = "SELECT * FROM ".$this->table;

        /* Si il y a un seul filtre de recherche */
        if(count($array) == 1) {

            foreach($array as $key => $value) {
                $query .= " WHERE $key = :value0;";
            }
          
        } else {
             /* Si il y a plus d'un seul filtre de recherche */
            $i = 0;
            foreach($array as $key => $value) {
                if($i == 0) {
                    $query .= ' WHERE '.$key. ' = :value'.$i;
                } else {
                    $query .= ' AND '. $key. ' = :value'.$i.';';
                }
                $i++;
            }
        }

        $statement = $this->pdo->prepare($query);

        $i = 0;
        foreach($array as $key => $value) {
            $param_key = 'value'.$i;
            $params[$param_key] = $value;
            $i++;
        }

        $statement->execute($params);
        return $statement->fetchAll();
    }

    public function calendriers_by_location_and_category($location, $category) {

        $query = "SELECT projeterp_location.name AS location_name, projeterp_category_formation.id AS category_id, projeterp_category_formation.name AS category_name, projeterp_slug_formation.name AS formation_name, projeterp_calendriers.content
        FROM projeterp_calendriers
        INNER JOIN projeterp_slug_formation
        ON projeterp_calendriers.slug_formation_id = projeterp_slug_formation.id
        INNER JOIN projeterp_category_formation
        ON projeterp_calendriers.category_formation_id = projeterp_category_formation.id
        INNER JOIN projeterp_location
        ON projeterp_calendriers.location_id = projeterp_location.id
        WHERE projeterp_location.name = '$location'
        AND projeterp_category_formation.id = $category
        ORDER BY projeterp_calendriers.order_display ASC;";

        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    
    private function dieIfNoResults($results) {

        /* Si les valeurs n'existent pas en Bdd => on retourne une page d'erreur */
        if (empty($results)) {
            require_once VIEW_PATH . 'layouts/error.php';
            exit();
        }

        return $results;
    }

    public function create($array) {

        $intos = '';
        $values = '';

        foreach($array as $key => $value) {
            $intos .= $key.', ';
            $values .= '"'.$value.'"'.', ';
        }
        $intos = substr($intos, 0, -2);
        $values = substr($values, 0, -2);

        $query = "INSERT INTO ".$this->table." (".$intos.") VALUES (".$values.");";
       /*  dd($query); */
        $statement = $this->pdo->prepare($query);
        $statement->execute();
    }

}