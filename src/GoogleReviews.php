<?php

namespace App;

class GoogleReviews
{
    const GOOGLE_API_KEY_APP = 'AIzaSyDt-8KfK3_SWzoBVDzb1R0ALir9tY4IQvs';
    const PLACE_GOOGLE_ID = 'ChIJoXv2HgfQzRIRliL7jdu2Ypw';
    const LANGUAGE = 'fr';

    // Company Rating
    public $google_total_reviews_company;
    public $google_rating_company;
    public $google_reviews_company;

    // Calculate stars
    public $nb_full_stars;
    public $nb_half_stars;
    public $nb_empty_stars;

    public function __construct()
    {
        // https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJoXv2HgfQzRIRliL7jdu2Ypw&key=AIzaSyDt-8KfK3_SWzoBVDzb1R0ALir9tY4IQvs

        $url = 'https://maps.googleapis.com/maps/api/place/details/json?placeid=' . self::PLACE_GOOGLE_ID . '&key=' . self::GOOGLE_API_KEY_APP . '&language=' . self::LANGUAGE;

        $curl = curl_init($url);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 1,
        ]);

        $datas = curl_exec($curl);

        if (!$datas || curl_getinfo($curl, CURLINFO_HTTP_CODE !== 200)) {
            return null;
        }

        $datas = json_decode($datas, true);

        $this->google_rating_company = $datas['result']['rating'];
        $this->google_total_reviews_company = $datas['result']['user_ratings_total'];
        $this->google_reviews_company = $datas['result']['reviews'];

        $this->calculate_stars_company();
    }

    private function calculate_stars_company():void {

        /* Average from Google Reviews */
        $average = $this->google_rating_company; //4.8
        /* $average = 5; */
    
        /* Round Average Int */
        $nb_full_stars = floor($average);

        /* Si la moyenne est plus grande que le nombre entier d'étoiles ET si la moyenne n'est pas égale à 5 */
        if($average > $nb_full_stars && $average !== 5) {
            $nb_half_star = 1;  
        } else {
            $nb_half_star = 0;  
        }

        $nb_empty_stars = 5 - ($nb_full_stars + $nb_half_star);

        $this->nb_full_stars = $nb_full_stars;
        $this->nb_half_star = $nb_half_star;
        $this->nb_empty_stars = $nb_empty_stars;
    }

    public function calculate_empty_user_stars($nb_stars) {
        if($nb_stars !== 5) {
            return 5 - $nb_stars;
        }
    }
}