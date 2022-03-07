<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />

    <!-- Facebook verification Domain name 
    <meta name="facebook-domain-verification" content="bt2z0q09ci6p9m68omsqj59q9uchmv" />
    Facebook verification Domain name -->

    <!-- SEO GOOGLE-->
    <meta name="description" content="Des formations 100% conformes aux programmes officiels de l'INRS. Une méthode d'apprentissage qui met l'acquisition des compétences au centre de nos objectifs ...">
    <meta name="keywords" content="">
    <link rel="canonical" href="https://erpformation.fr/" />
    <!-- SEO GOOGLE-->

    <!-- Google Search Console Index -->
    <meta name="google-site-verification" content="" />
    <!-- Google Search Console Index -->

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../../css/font-awesome-5.15.4.min.css">
    <!-- Font Awesome 5 -->

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="../../css/bootstrap-5.0.0-beta1.min.css">
    <!-- Bootstrap 5 -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../img/favicon.png">
    <!-- Favicon -->

    <!-- Splide JS and CSS -->
    <script defer src="../../js/splide.min.js"></script>
    <link rel="stylesheet" href="../../css/splide-core.min.css">
    <!-- Splide JS and CSS -->

    <!-- NanoGallery2 CSS-->
    <?php if ($_SERVER['REQUEST_URI'] === '/photos') : ?>
        <link rel="stylesheet" href="../../css/nanogallery2.css">
        <link rel="stylesheet" href="../../css/nanogallery2.woff.min.css">
    <?php endif; ?>
    <!-- NanoGallery2 CSS-->

    <!-- Style CSS -->
    <link rel="stylesheet" href="../../css/styles.css">

    <title>ERP Formation | <?= $title ?? 'Notre site Web' ?></title>
</head>

<body>

    <!-- MENU -->
    <div class="navigation" style="<?= $_SERVER['REQUEST_URI'] !== '/' ? 'background-color: #000000 !important;' : 'background-color: #00000080 !important;' ?>">
        <!-- Desktop -->
        <div class="navigation-container-desktop">

            <!-- Logo -->
            <div class="logo">
                <a href="/">
                    <img src="../../img/logo.png" alt="erpformation-logo">
                    <p>Nice - Cannes - Antibes - Marseille</p>
                </a>

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
                                                    <i class="fas fa-book"></i></i>Nice
                                                </a>
                                            </li>
                                            <li>
                                                <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="calendrier-marseille">
                                                    <i class="fas fa-book"></i></i>Marseille
                                                </a>
                                            </li>
                                            <li>
                                                <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ? 'active' : ''; ?>" href="calendrier-antibes">
                                                    <i class="fas fa-book"></i></i>Antibes
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
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-nice' ? 'active' : ''; ?>" href="calendrier-nice"><i class="fas fa-book"></i></i>Nice</a>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-marseille' ? 'active' : ''; ?>" href="calendrier-marseille"><i class="fas fa-book"></i></i>
                                            Marseille</a>
                                        <a class="<?= $_SERVER['REQUEST_URI'] === '/calendrier-antibes' ? 'active' : ''; ?>" href="calendrier-antibes"><i class="fas fa-book"></i></i>
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

    <div class="content" style="<?= $_SERVER['REQUEST_URI'] !== '/' ? 'margin-top:140px !important;' : '' ?>">
        <?= $content ?>
    </div>

    <!-- Start Calculate average stars Company -->
    <?php

    use App\GoogleReviews;

    $google_reviews = new GoogleReviews();

    $reviews = $google_reviews->google_reviews_company;
    $average_company = $google_reviews->google_rating_company;
    $total_reviews_company = $google_reviews->google_total_reviews_company;
    ?>
    <!-- End Calculate average stars Company -->

    <!-- GOOGLE REVIEWS START SLIDER -->
    <?php if (!empty($reviews)) : ?>
        <div id="google-review" class="splide-google mt-4 mb-4">

            <div class="text-center mb-3">
                <h3 class="p-0 m-0">Nos avis Google</h3>

                <div>
                    <?= $average_company ?>

                    <?php for ($h = 1; $h <= $google_reviews->nb_full_stars; $h++) : ?>
                        <i class="fas fa-star text-warning"></i>
                    <?php endfor; ?>

                    <?php for ($h = 1; $h <= $google_reviews->nb_half_star; $h++) : ?>
                        <i class="fas fa-star-half-alt text-warning"></i>
                    <?php endfor; ?>

                    <?php for ($h = 1; $h <= $google_reviews->nb_empty_stars; $h++) : ?>
                        <i class="far fa-star text-warning"></i>
                    <?php endfor; ?>
                </div>

                <div class="total-reviews-company">
                    <a href="https://www.google.com/maps/place/ERP+FORMATION/@43.7069304,7.2606107,17z/data=!4m7!3m6!1s0x12cdd0071ef67ba1:0x9c62b6db8dfb2296!8m2!3d43.7069304!4d7.2627994!9m1!1b1">
                        <?= $total_reviews_company ?> avis
                    </a>
                </div>
            </div>

            <!-- Arrows Absolute -->
            <div class="splide__arrows">
                <i class="splide__arrow splide__arrow--prev fas fa-chevron-left"></i>
                <i class="splide__arrow splide__arrow--next fas fa-chevron-right"></i>
            </div>

            <!-- Slider Shows -->
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($reviews as $review) : ?>

                        <li class="splide__slide">

                            <div class="google-comment">
                                <?= $review['text'] ?>
                            </div>

                            <div class="d-flex justify-content-end mt-4 me-2">
                                <div class="d-flex">
                                    <div class="text-end me-2">

                                        <div class="mb-1"><?= ucwords($review['author_name']) ?></div>

                                        <div class="d-flex justify-content-end mb-1">

                                            <?php
                                            $stars = (int)$review['rating'];
                                            $empty_stars = $google_reviews->calculate_empty_user_stars($stars);
                                            ?>

                                            <?php for ($j = 0; $j < $stars; $j++) : ?>
                                                <i class="fas fa-star text-warning"></i>
                                            <?php endfor; ?>

                                            <?php for ($j = 0; $j < $empty_stars; $j++) : ?>
                                                <i class="far fa-star text-warning"></i>
                                            <?php endfor; ?>
                                        </div>

                                        <div class="comment-date"><?= date("d/m/Y", $review['time']) ?></div>
                                    </div>

                                    <div class="avatar-google">
                                        <img src=" <?= $review['profile_photo_url'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="alert alert-info" role="alert">
                <small>It seems that there is a problem with the Google Reviews API, contact the administrator of the
                    website for more informations !</small>
            </div>
        </div>
    <?php endif; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide-google', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                pauseOnHover: false,
                interval: 4000,
                classes: {
                    arrows: 'splide__arrows your-class-arrows',
                    arrow: 'splide__arrow your-class-arrow',
                    prev: 'splide__arrow--prev your-class-prev',
                    next: 'splide__arrow--next your-class-next',
                },
            });

            splide.mount();
        });
    </script>

    <!-- GOOGLE REVIEWS END SLIDER -->

    <!-- EN SAVOIR PLUS  -->
    <div class="container text-center">
        <div id="more" class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="btn en-savoir-plus">
                    <a href="demande-de-renseignements">
                        <div class="btn-more">
                            <i aria-hidden="true" class="far fa-hand-point-right" style="margin-right: 5px;"></i>
                            en savoir plus
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-end consultation" style="padding: 20px 0;">
                    <?php if ($_SERVER['REQUEST_URI'] == '/') : ?>
                        <p>Consulter
                            <a href="presentation">
                                <span class="underline">Notre Page de Présentation</span>
                            </a>
                        </p>
                    <?php elseif ($_SERVER['REQUEST_URI'] == '/presentation') : ?>
                        <p>Consulter
                            <a href="formations-initiales">
                                <span class="underline">Nos Formations</span>
                            </a>
                        </p>
                    <?php elseif ($_SERVER['REQUEST_URI'] == '/formations-a-renouveler') : ?>
                        <p>Consulter
                            <a href="calendrier-nice">
                                <span class="underline">le Calendrier de nos Formations</span>
                            </a>
                        </p>
                    <?php elseif ($_SERVER['REQUEST_URI'] == '/formations-initiales') : ?>
                        <p>Consulter
                            <a href="calendrier-nice">
                                <span class="underline">le Calendrier de nos Formations</span>
                            </a>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- EN SAVOIR PLUS  -->

    <!-- POPUP START -->
    <div class="formulaire-bas-de-page hidden-test-test">
        <div class="top">
            <div class="content-top">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <i class="fas fa-phone-alt"></i>
                    <p class="text-center">demande d'informations <br> <strong>« formations initiales »</strong></p>

                    <a class="arrow-icon">
                        <i id="main-haut" class="text-white fas fa-hand-point-up me-1"></i>
                        <i id="main-bas" class="d-none text-white fas fa-hand-point-down me-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="content-bottom">
                <div id="popup" class="container mb-3">

                    <div id="success-popup">
                        <div id="success-popup-message" class="p-2 m-0 alert alert-success" role="alert">
                        </div>
                    </div>

                    <form id="form-popup" method="POST" enctype="multipart/form-data">
                        <p><a href="tel:+33493818789">04 93 81 87 89</a></p>
                        <div id="errors-popup" class="mb-2 mt-1">
                            <div class="alert alert-danger p-2 m-0" role="alert">
                                <ul class="p-0 m-0" id="errors-list">
                                </ul>
                            </div>
                        </div>

                        <div class="row g-2 mb-2">
                            <div class="col-12 mb-1">
                                <div class="form-text">* mentions obligatoires</div>
                            </div>
                            <div class="col-12">
                                <input name="phone" type="tel" class="form-control" placeholder="Téléphone *">
                            </div>
                            <div class="col-12">
                                <input name="name" type="text" class="form-control" placeholder="Votre nom">
                            </div>
                        </div>

                        <input hidden type="text" name="_token" value="<?= $_SESSION['_token'] ?>">

                        <div class="d-flex justify-content-center">
                            <input id="popup-submit" type="submit" class="btn mt-1 w-100" name="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- POPUP END -->

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

    <!-- SCROLLTOP BUTTON START -->
    <button onclick="topFunction()" id="scrolltop"><i class="fas fa-chevron-circle-up"></i></button>
    <!-- SCROLLTOP BUTTON END -->

    <!-- Jquery 3.6.0 -->
    <script src="../../js/jquery-3.6.0.js"></script>
    <!-- Jquery 3.6.0 -->

    <!-- Bootstrap 5 and Popper Js -->
    <script src="../../js/popper-2.5.4.min.js"></script>
    <script src="../../js/bootstrap-5.0.0-beta1.min.js"></script>
    <!-- Bootstrap 5 and Popper Js -->

    <!-- My Javascript -->

    <?php if ($_SERVER['REQUEST_URI'] === '/photos') : ?>
        <script src="../../js/nanogallery2.js"></script>
    <?php endif; ?>

    <script src="../../js/sendmail-popup.js"></script>
    <script src="../../js/dropdown-menu.js"></script>
    <script src="../../js/observer.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/file-upload-validation.js"></script>
    <script src="../../js/presentation-cards-hover.js"></script>
    <script src="../../js/scrolltop-button.js"></script>
    <script src="../../js/switchtab.js"></script>
    <!-- My Javascript -->
</body>

</html>