<?php

namespace App\Controllers;

use App\Models\Calendrier;

class CalendriersController extends Controller
{
    public function calendrier_nice()
    {

        $calendriers = new Calendrier();

        $calendriers_securite = $calendriers->calendriers_by_location_and_category('Nice', 1);
        $calendriers_incendie = $calendriers->calendriers_by_location_and_category('Nice', 2);
        $calendriers_secourisme = $calendriers->calendriers_by_location_and_category('Nice', 3);
        $calendriers_habilitation_électrique = $calendriers->calendriers_by_location_and_category('Nice', 4);

        $this->render('calendriers/calendrier-nice', [
            'title' => 'Calendrier Nice', 
            'calendriers_securite' => $calendriers_securite,
            'calendriers_incendie' => $calendriers_incendie,
            'calendriers_secourisme' => $calendriers_secourisme,
            'calendriers_habilitation_électrique' => $calendriers_habilitation_électrique,
        ]);
    }

    public function calendrier_marseille()
    {
        $calendriers = new Calendrier();

        $calendriers_securite = $calendriers->calendriers_by_location_and_category('Marseille', 1);
        $calendriers_incendie = $calendriers->calendriers_by_location_and_category('Marseille', 2);
        $calendriers_secourisme = $calendriers->calendriers_by_location_and_category('Marseille', 3);
        $calendriers_habilitation_électrique = $calendriers->calendriers_by_location_and_category('Marseille', 4);

        $this->render('calendriers/calendrier-marseille', [
            'title' => 'Calendrier Marseille', 
            'calendriers_securite' => $calendriers_securite,
            'calendriers_incendie' => $calendriers_incendie,
            'calendriers_secourisme' => $calendriers_secourisme,
            'calendriers_habilitation_électrique' => $calendriers_habilitation_électrique,
        ]);
    }

    public function calendrier_antibes()
    {
        $calendriers = new Calendrier();

        $calendriers_securite = $calendriers->calendriers_by_location_and_category('Antibes', 1);
        $calendriers_incendie = $calendriers->calendriers_by_location_and_category('Antibes', 2);
        $calendriers_secourisme = $calendriers->calendriers_by_location_and_category('Antibes', 3);
        $calendriers_habilitation_électrique = $calendriers->calendriers_by_location_and_category('Antibes', 4);

        $this->render('calendriers/calendrier-antibes', [
            'title' => 'Calendrier Antibes', 
            'calendriers_securite' => $calendriers_securite,
            'calendriers_incendie' => $calendriers_incendie,
            'calendriers_secourisme' => $calendriers_secourisme,
            'calendriers_habilitation_électrique' => $calendriers_habilitation_électrique,
        ]);
    }
}