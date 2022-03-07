<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap 5 -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../img/favicon.png">
    <!-- Favicon -->

    <!-- Splide JS and CSS -->
    <script src="../../js/splide.min.js"></script>
    <link rel="stylesheet" href="../../css/splide-core.min.css">
    <!-- Splide JS and CSS -->

    <!-- NanoGallery2 CSS-->
    <link rel="stylesheet" href="../../css/nanogallery2.css">
    <link rel="stylesheet" href="../../css/nanogallery2.woff.min.css">
    <!-- NanoGallery2 CSS-->

    <!-- Style CSS -->
    <link rel="stylesheet" href="../../css/styles.css">

    <title>ERP Formation | Page introuvable</title>
</head>

<body>

    <div class="d-flex flex-column error-page">

        <div class="navigation" style="<?= $_SERVER['REQUEST_URI'] !== '/' ? 'background-color: #000000 !important;' : 'background-color: #00000080 !important;' ?>">
            <!-- Desktop -->
            <div class="navigation-container-desktop">

                <!-- Logo -->
                <div class="logo">
                    <img src="../../img/logo.png" alt="erpformation-logo">
                    <p>Nice - Cannes - Antibes - Marseille</p>
                </div>

                <!-- Menu Desktop-->
                <div class="desktop reveal">
                    <ul>
                        <li class="desktop-1">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : ''; ?>" href="/"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="desktop-2">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/presentation' ? 'active' : ''; ?>" href="presentation">présentation</a>
                        </li>

                        <!-- Dropdown -->
                        <li class="desktop-3 DropDown-main-first">
                            <div class="DropDown-link-first">
                                <a class="
                            <?= $_SERVER['REQUEST_URI'] === '/calendrier-nice' ||
                                $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ||
                                $_SERVER['REQUEST_URI'] === '/formations-initiales' ||
                                $_SERVER['REQUEST_URI'] === '/calendrier-nice' ||
                                $_SERVER['REQUEST_URI'] === '/formations-a-renouveler' ||
                                $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="">formations<i class="fas fa-caret-down"></i></a>
                            </div>
                            <div class="DropDown-menu-first ">
                                <ul>
                                    <li>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/formations-initiales' ? 'active' : ''; ?>" href="formations-initiales">Formation initiales</a>
                                    </li>
                                    <li>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/formations-a-renouveler' ? 'active' : ''; ?>" href="formations-a-renouveler">Formations à renouveler</a>
                                    </li>

                                    <!-- Second dropdown -->
                                    <li class="DropDown-main-second">
                                        <div class="DropDown-link-second">
                                            <a class="<?=
                                                        $_SERVER['REQUEST_URI'] === '/calendrier-nice' ||
                                                            $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ||
                                                            $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="#">Calendrier Formations
                                                <i class="fas fa-caret-down"></i>
                                            </a>
                                        </div>
                                        <div class="DropDown-menu-second">
                                            <ul>
                                                <li>
                                                    <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-nice' ? 'active' : ''; ?>" href="calendrier-nice">
                                                        <i class="fas fa-book"></i></i>Formations Nice
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="calendrier-marseille">
                                                        <i class="fas fa-book"></i></i>Formations Marseille
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ? 'active' : ''; ?>" href="calendrier-antibes">
                                                        <i class="fas fa-book"></i></i>Formations Antibes
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Second dropdown -->

                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown -->

                        <li class="desktop-4">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/photos' ? 'active' : ''; ?>" href="photos">photos
                            </a>
                        </li>
                        <li class="desktop-5">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/recrutement' ? 'active' : ''; ?>" href="recrutement">recrutement</a>
                        </li>
                        <li class="desktop-6">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/contact' ? 'active' : ''; ?>" href="contact">contact</a>
                        </li>
                        <li class="desktop-7">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/inscription' ? 'active' : ''; ?>" href="inscription">inscription</a>
                        </li>
                        <li class="desktop-8">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/qcm' ? 'active' : ''; ?>" href="qcm">qcm</a>
                        </li>
                    </ul>
                </div>

                <div class="icon-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <!-- Desktop -->

            <!-- Mobile -->
            <div class="mobile">
                <ul>
                    <li class="mobile-1">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : ''; ?>" href="/"><i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="mobile-2">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/presentation' ? 'active' : ''; ?>" href="presentation">présentation</a>
                    </li>

                    <!-- Dropdown Mobile -->
                    <li class="mobile-3">
                        <div class="DropDown-main-resp">
                            <button class="btn-drop-resp
                            <?= $_SERVER['REQUEST_URI'] === '/calendrier-nice' ||
                                $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ||
                                $_SERVER['REQUEST_URI'] === '/formations-initiales' ||
                                $_SERVER['REQUEST_URI'] === '/formations-a-renouveler' ||
                                $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" type="button">formations
                                <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="DropDown-menu-resp">
                                <ul>
                                    <li>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/formations-initiales' ? 'active' : ''; ?>" href="formations-initiales"><i class="fas fa-book"></i>Formations initiales
                                        </a>
                                    </li>
                                    <li>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/formations-a-renouveler' ? 'active' : ''; ?>" href="formations-a-renouveler"><i class="fas fa-book"></i>Formations à
                                            renouveler</a>
                                    </li>

                                    <p><i class="fas fa-long-arrow-alt-right"></i>Calendrier de Formations :</p>

                                    <div class="list-formations-calendrier">
                                        <li>
                                            <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-nice' ? 'active' : ''; ?>" href="calendrier-nice"><i class="fas fa-book"></i></i>Formations
                                                Nice</a>
                                            <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="calendrier-marseille"><i class="fas fa-book"></i></i>Formations
                                                Marseille</a>
                                            <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ? 'active' : ''; ?>" href="calendrier-antibes"><i class="fas fa-book"></i></i>Formations
                                                Antibes</a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Dropdown Mobile -->

                    <li class="mobile-4">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/photos' ? 'active' : ''; ?>" href="photos">photos</a>
                    </li>
                    <li class="mobile-5">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/recrutement' ? 'active' : ''; ?>" href="recrutement">recrutement</a>
                    </li>
                    <li class="mobile-6">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/contact' ? 'active' : ''; ?>" href="contact">contact</a>
                    </li>
                    <li class="mobile-7">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/inscription' ? 'active' : ''; ?>" href="inscription">inscription</a>
                    </li>
                    <li class="mobile-8">
                        <a class="<?= $_SERVER['REQUEST_URI'] === '/qcm' ? 'active' : ''; ?>" href="qcm">qcm</a>
                    </li>
                </ul>
            </div>
            <!-- Mobile -->
        </div>

        <div class="error-content">
            <h1><?= isset($error_status) ? $error_status : '404' ?></h1>
            <p><?= isset($error_message) ? $error_message : 'Page introuvable' ?></p>
            <a href="/" class="btn">Retourner a la page d'accueil</a>
        </div>

        <!-- Footer START-->
        <footer class="bg-dark text-lg-start">
            <!-- Grid container -->
            <div class="p-4">

                <!--Grid row-->
                <div class="d-flex flex-wrap justify-content-between">
                    <!--Grid column 1-->
                    <div class="p-1 mt-2 mb-2">
                        <h5 class="text-uppercase">formation nice</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">formation SST nice</a>
                            </li>
                            <li>
                                <a href="#">formation PSE1 nice</a>
                            </li>
                            <li>
                                <a href="#">formation PSC1 nice</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 1 nice</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 2 nice</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 3 nice</a>
                            </li>
                            <li>
                                <a href="#">formation CQP-APS nice</a>
                            </li>
                            <li>
                                <a href="#">reconversion professionnelle nice</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column 1-->

                    <!--Grid column 2-->
                    <div class="p-1 mt-2 mb-2">
                        <h5 class="text-uppercase">formation marseille</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">formation SST marseille</a>
                            </li>
                            <li>
                                <a href="#">formation PSE1 marseille</a>
                            </li>
                            <li>
                                <a href="#">formation PSC1 marseille</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 1 marseille</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 2 marseille</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 3 marseille</a>
                            </li>
                            <li>
                                <a href="#">formation CQP-APS marseille</a>
                            </li>
                            <li>
                                <a href="#">reconversion professionnelle marseille</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column 2-->

                    <!--Grid column 3-->
                    <div class="p-1 mt-2 mb-2">
                        <h5 class="text-uppercase">formation cannes</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">formation SST cannes</a>
                            </li>
                            <li>
                                <a href="#">formation PSE1 cannes</a>
                            </li>
                            <li>
                                <a href="#">formation PSC1 cannes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 1 cannes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 2 cannes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 3 cannes</a>
                            </li>
                            <li>
                                <a href="#">formation CQP-APS cannes</a>
                            </li>
                            <li>
                                <a href="#">reconversion professionnelle cannes</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column 3-->

                    <!--Grid column 4-->
                    <div class="p-1 mt-2 mb-2">
                        <h5 class="text-uppercase">formation antibes</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">formation SST antibes</a>
                            </li>
                            <li>
                                <a href="#">formation PSE1 antibes</a>
                            </li>
                            <li>
                                <a href="#">formation PSC1 antibes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 1 antibes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 2 antibes</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 3 antibes</a>
                            </li>
                            <li>
                                <a href="#">formation CQP-APS antibes</a>
                            </li>
                            <li>
                                <a href="#">reconversion professionnelle antibes</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column 4-->

                    <!--Grid column 4-->
                    <div class="p-1 mt-2 mb-2">
                        <h5 class="text-uppercase">formation monaco</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">formation SST monaco</a>
                            </li>
                            <li>
                                <a href="#">formation PSE1 monaco</a>
                            </li>
                            <li>
                                <a href="#">formation PSC1 monaco</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 1 monaco</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 2 monaco</a>
                            </li>
                            <li>
                                <a href="#">formation SSIAP 3 monaco</a>
                            </li>
                            <li>
                                <a href="#">formation CQP-APS monaco</a>
                            </li>
                            <li>
                                <a href="#">reconversion professionnelle monaco</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column 4-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Networks -->
            <div class="text-light text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <p>Suivez-nous !</p>
                <span class="networks">
                    <a href="https://www.facebook.com/Erp-Formation-1648747722039730/" target="_blank"><i class="fab fa-facebook"></i></a>
                </span>
                <span class="networks">
                    <a href="https://www.instagram.com/erp_formation/" target="_blank"><i class="fab fa-instagram"></i></a>
                </span>
                <!-- Copyright -->
                <p class="p-3">© ERP Formation 2004 - 2022. | Tous droits réservés.</p>
            </div>
        </footer>
        <!-- Footer END-->
    </div>



    <!-- SCROLLTOP BUTTON START -->
    <button onclick="topFunction()" id="scrolltop"><i class="fas fa-chevron-circle-up"></i></button>
    <!-- SCROLLTOP BUTTON END -->

    <!-- Jquery 3.6.0 -->
    <script src="../../js/jquery-3.6.0.js"></script>
    <!-- Jquery 3.6.0 -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>

    <!-- My Javascript -->
    <script src="../../js/dropdown-menu.js"></script>
    <script src="../../js/observer.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/scrolltop-button.js"></script>
    <!-- My Javascript -->
</body>

</html>