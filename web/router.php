<?php

use App\Controllers\CalendriersController;
use App\Controllers\FormationsController;
use App\Controllers\PopUpController;
use App\Controllers\WebSitePageController;

$router->addRoutes([

    /* PAGES */
    ['GET', '/', [WebSitePageController::class, 'index'], 'accueil'],
    ['GET', '/presentation', [WebSitePageController::class, 'presentation'], 'presentation'],
    ['GET', '/photos', [WebSitePageController::class, 'photos'], 'photos'],

    ['GET|POST', '/contact', [WebSitePageController::class, 'contact'], 'contact'],
    ['GET|POST', '/inscription', [WebSitePageController::class, 'inscription'], 'inscription'],
    ['GET|POST', '/recrutement', [WebSitePageController::class, 'recrutement'], 'recrutement'],
    ['GET|POST', '/demande-de-renseignements', [WebSitePageController::class, 'renseignements'], 'demande-de-renseignements'],

    /* FORMATIONS */
    ['GET', '/formations-initiales', [FormationsController::class, 'formations_initiales'], 'formations-initiales'],
    ['GET', '/formations-a-renouveler', [FormationsController::class, 'formations_a_renouveler'], 'formations-a-renouveler'],

    /* SHOW FORMATIONS */
    ['GET', '/formation-initiale-[i:id]', [FormationsController::class, 'formation_show']],

    /* CALENDRIERS */
    ['GET', '/calendrier-marseille', [CalendriersController::class, 'calendrier_marseille'],'calendrier-marseille'],
    ['GET', '/calendrier-nice', [CalendriersController::class, 'calendrier_nice'], 'calendrier-nice'],
    ['GET', '/calendrier-antibes', [CalendriersController::class, 'calendrier_antibes'],'calendrier-antibes'],

    /* TEST */
    ['GET', '/test-seo', [FormationsController::class, 'test_seo'],'test-seo'],

    /* FOOTER PAGES FORMATIONS */
    ['GET', '/Formation-SSIAP1-Nice', [WebSitePageController::class, 'Formation_SSIAP1_Nice'],'Formation-SSIAP1-Nice'],

    /* POP UP */
    ['POST', '/sendmail-popup', [PopUpController::class, 'sendmail_popup'],'sendmail-popup'],
]);