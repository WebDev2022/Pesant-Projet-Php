<?php

namespace App\Controllers;

use App\Models\Formation;
use Arcanedev\SeoHelper\Entities\Title;

class FormationsController extends Controller
{

    public function test_seo() {
    echo 'test';

    }

    public function formations_initiales()
    {
        $formations = new Formation;
        $formations = $formations->findBy(['type'=> 1]);
        $this->render('formations/formations-initiales', ['title' => 'Formations Initiales', 'formations' => $formations]);
    }

    public function formations_a_renouveler()
    {
        $formations = new Formation;
        $formations = $formations->findBy(['type'=> 2]);

        $this->render('formations/formations-a-renouveler', ['title' => 'Formations à Renouveler', 'formations' => $formations]);
    }

    public function formation_show($param)
    {
        $formation = new Formation;
        $formation = $formation->findOrDie($param['id']);

        $requirements = unserialize(base64_decode($formation['requirements']));
        $evaluations = unserialize(base64_decode($formation['evaluation']));
        $modules = unserialize(base64_decode($formation['modules_uv_list']));
        $public_concerned = unserialize(base64_decode($formation['public_concerned']));
        $list_dates_sessions = unserialize(base64_decode($formation['list_dates_sessions']));
        $objectifs = unserialize(base64_decode($formation['objectif']));
        $warning = unserialize(base64_decode($formation['warning']));
        $equipements = unserialize(base64_decode($formation['pedagogic_equipement']));
        $methods = unserialize(base64_decode($formation['pedagogic_method']));
        $recyclages = unserialize(base64_decode($formation['recyclage']));
        $remises_a_niveau = unserialize(base64_decode($formation['remise_a_niveau']));

        $this->render('formations/formation-show', [
            'title' => 'Formation-initiale', 
            'formation' => $formation, 
            'requirements' => $requirements, 
            'evaluations' => $evaluations, 
            'modules' => $modules, 
            'public_concerned' => $public_concerned, 
            'list_dates_sessions' => $list_dates_sessions, 
            'objectifs' => $objectifs, 
            'warning' => $warning, 
            'equipements' => $equipements, 
            'methods' => $methods, 
            'recyclages' => $recyclages, 
            'remises_a_niveau' => $remises_a_niveau, 
        ]);
    }
}