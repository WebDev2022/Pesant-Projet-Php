<?php

namespace App\Database;

use PDO;
use PDOException;

abstract class Database
{
    protected $pdo;
    private $options =  [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public function __construct()
    {

        $DB_CONNECTION = $_ENV['DB_CONNECTION'];
        $DB_HOST = $_ENV['DB_HOST'];
        $DB_PORT = $_ENV['DB_PORT'];
        $DB_DATABASE = $_ENV['DB_DATABASE'];
        $DB_USERNAME = $_ENV['DB_USERNAME'];
        $DB_PASSWORD = $_ENV['DB_PASSWORD'];

        $DSN = $DB_CONNECTION.':host='.$DB_HOST.';port='.$DB_PORT.';dbname='.$DB_DATABASE.';charset=utf8';

        try {
            $this->pdo = new PDO($DSN, $DB_USERNAME, $DB_PASSWORD, $this->options);
        } catch (PDOException $e) {
           /*  dd($e->getMessage()); */
           /* dd($DB_CONNECTION , $DB_HOST, $DB_PORT, $DB_DATABASE, $DB_USERNAME, $DB_PASSWORD); */
        }
    }
}
