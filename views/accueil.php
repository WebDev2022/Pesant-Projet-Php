<!-- Slider Perso Start -->
<div class="splide">

    <!-- Arrows Absolute -->
    <div class="splide__arrows">
        <i class="splide__arrow splide__arrow--prev fas fa-chevron-left"></i>
        <i class="splide__arrow splide__arrow--next fas fa-chevron-right"></i>
    </div>

    <!-- Slider Shows -->
    <div class="splide__track">
        <ul class="splide__list">

            <li class="splide__slide">
                <div class="logo-princier-monaco">
                    <img src="img/slider/logo-princier.png" alt="logo-princier">
                </div>
                <div class="title">
                    <h1 style="color: #b71720 !important;">SSIAP1.2.3 - MONÉGASQUE</h1>
                    <h5 style="color: #b71720 !important;">NOUVELLE FORMATION | 2022</h5>
                </div>
                <div class="logo-pompiers">
                    <img src="img/slider/logo-sapeurs-pompiers-monaco.png" alt="logo-sapeurs-pompiers-monaco">
                </div>
                <picture>
                    <source srcset="img/slider/ssiap-monegasque-500x965.webp" media="(max-width: 500px)" type="image/webp">
                    <source srcset="img/slider/ssiap-monegasque-500x965.jpg" media="(max-width: 500px)" type="image/jpg">

                    <source srcset="img/slider/ssiap-monegasque.webp" type="image/webp">
                    <source srcset="img/slider/ssiap-monegasque.jpg" type="image/jpg">

                    <img class="img-slider" src="img/slider/ssiap-monegasque.jpg" alt="Formation SSIAP 1,2,3 Monégasque">
                </picture>
            </li>

            <li class="splide__slide">
                <div class="title">
                    <h1>SÛRETÉ - PROTECTION</h1>
                    <h5>N°1 | CENTRE DE FORMATION | 2004 - 2022</h5>
                </div>
                <picture>
                    <source srcset="img/slider/surete-protect-500x965.webp" media="(max-width: 500px)" type="image/webp">
                    <source srcset="img/slider/surete-protect-500x965.jpg" media="(max-width: 500px)" type="image/jpg">

                    <source srcset="img/slider/surete-protect.webp" type="image/webp">
                    <source srcset="img/slider/surete-protect.jpg" type="image/jpg">

                    <img class="img-slider" src="img/slider/surete-protect.jpg" media="(max-width: 500px)" alt="Formation SSIAP 1,2,3 Monégasque">
                </picture>
            </li>

            <li class="splide__slide">
                <div class="title">
                    <h1>SÉCURITÉ - INCENDIE</h1>
                    <h5>N°1 | CENTRE DE FORMATION | 2004 - 2022</h5>
                </div>

                <picture>
                    <source srcset="img/slider/secu-incendie-500x965.webp" media="(max-width: 500px)" type="image/webp">
                    <source srcset="img/slider/secu-incendie-500x965.jpg" media="(max-width: 500px)" type="image/jpg">

                    <source srcset="img/slider/secu-incendie.webp" type="image/webp">
                    <source srcset="img/slider/secu-incendie.jpg" type="image/jpg">

                    <img class="img-slider" src="img/slider/secu-incendie.jpg" alt="Formation SSIAP 1,2,3 Monégasque">
                </picture>
            </li>

            <li class="splide__slide">
                <div class="title">
                    <h1>PRÉVENTION - SECOURISME</h1>
                    <h5>N°1 | CENTRE DE FORMATION | 2004 - 2022</h5>
                </div>

                <picture>
                    <source srcset="img/slider/prev-secourisme-500x965.webp" media="(max-width: 500px)" type="image/webp">
                    <source srcset="img/slider/prev-secourisme-500x965.jpg" media="(max-width: 500px)" type="image/jpg">

                    <source srcset="img/slider/prev-secourisme.webp" type="image/webp">
                    <source srcset="img/slider/prev-secourisme.jpg" type="image/jpg">

                    <img class="img-slider" src="img/slider/prev-secourisme.jpg" alt="Formation SSIAP 1,2,3 Monégasque">
                </picture>
            </li>
        </ul>
    </div>

    <!-- Slider Progress Bar-->
    <div class="splide__progress">
        <div class="splide__progress__bar">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            pauseOnHover: false,
            interval: 4000,
        });

        splide.on('pagination:mounted', function(data) {
            // You can add your class to the UL element
            data.list.classList.add('splide__pagination--custom');

            // `items` contains all dot items
            data.items.forEach(function(item) {
                item.button.textContent = '';
            });
        });

        splide.mount();
    });
</script>
<!-- Slider Perso End -->

<!-- CARDS SECTION START -->
<div id="home-cards" class="container">
    <div class="row">
        <div class="col-3">
            <div class="home-card secu-incendie">
                <div class="text-center">
                    <a href="">
                        <i class="fas fa-fire-extinguisher" style="font-size: 64px;"></i>
                        <h4>sécurité incendie</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="home-card secu-surete">
                <div class="text-center">
                    <a href="">
                        <svg version="1.1" id="cctv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15 15" style="enable-background:new 0 0 15 15; height: 64px;" xml:space="preserve">
                            <style type="text/css">
                                .cctv0 {
                                    fill: #FEFEFE;
                                }

                                .cctv1 {
                                    fill: #FCFDFD;
                                }
                            </style>
                            <path class="cctv0" d="M14.85,10.61c0-0.24-0.11-0.42-0.37-0.42c-0.25,0-0.37,0.17-0.37,0.42c0,0.26-0.01,0.52,0,0.79
                                    c0.01,0.22-0.06,0.29-0.29,0.29c-0.79-0.01-1.57,0-2.36-0.01c-0.67-0.01-1.12-0.47-1.13-1.15c-0.01-0.48,0.01-0.97-0.01-1.45
                                    c0-0.19,0.05-0.32,0.19-0.45c0.54-0.53,1.08-1.07,1.62-1.61c0.71-0.71,0.71-1.22,0.03-1.96c-0.09-0.1-0.16-0.16-0.07-0.32
                                    c0.32-0.6,0.24-1-0.23-1.49c-0.59-0.6-1.18-1.19-1.78-1.78c-0.56-0.55-1.21-0.56-1.77,0C5.67,4.11,3.03,6.75,0.39,9.39
                                    c-0.15,0.15-0.32,0.3-0.22,0.54c0.11,0.25,0.34,0.25,0.57,0.25c0.59,0,1.17,0,1.85,0c-0.14,0.15-0.21,0.22-0.28,0.3
                                    c-0.38,0.4-0.39,0.52-0.01,0.9c0.37,0.37,0.74,0.74,1.11,1.11c0.43,0.42,0.54,0.43,0.96,0c0.2-0.2,0.32-0.26,0.55-0.02
                                    c0.56,0.57,1.18,0.56,1.76-0.01c0.52-0.51,1.04-1.03,1.55-1.56c0.41-0.42,0.81-0.85,1.21-1.27C9.49,9.66,9.53,9.68,9.57,9.7
                                    c0,0.23,0,0.46,0,0.69c0.02,1.28,0.79,2.05,2.06,2.06c0.63,0.01,1.26,0,1.89,0c0.59,0,0.59,0,0.59,0.57c0,0.16,0,0.31,0,0.47
                                    c0,0.26,0.1,0.45,0.38,0.45c0.26,0,0.36-0.19,0.36-0.42C14.86,12.55,14.86,11.58,14.85,10.61z M1.7,9.43c-0.05,0-0.1-0.01-0.22-0.03
                                    C1.62,9.24,1.71,9.15,1.8,9.06c2.31-2.31,4.61-4.61,6.92-6.92c0.43-0.43,0.53-0.43,0.96,0c0.54,0.54,1.08,1.07,1.61,1.61
                                    c0.32,0.32,0.32,0.46,0,0.79c-1.56,1.56-3.13,3.13-4.69,4.7C6.47,9.36,6.36,9.43,6.18,9.43C4.69,9.43,3.2,9.43,1.7,9.43z
                                    M3.98,11.84c-0.07,0.07-0.12,0.02-0.17-0.02c-0.26-0.26-0.52-0.52-0.78-0.78c-0.09-0.09-0.06-0.15,0.02-0.22
                                    c0.07-0.07,0.13-0.08,0.2-0.01c0.26,0.26,0.52,0.52,0.78,0.78c0.03,0.03,0.05,0.06,0.08,0.11C4.06,11.75,4.03,11.8,3.98,11.84z
                                    M6.27,11.82c-0.43,0.43-0.52,0.42-0.95-0.01c-0.52-0.52-1.04-1.03-1.65-1.63c0.96,0,1.8-0.01,2.63,0.01C6.59,10.19,6.8,10.1,7,9.9
                                    c1.39-1.4,2.79-2.8,4.2-4.19c0.09-0.09,0.17-0.36,0.39-0.14c0.19,0.19,0.45,0.37,0.23,0.69c-0.07,0.1-0.16,0.18-0.24,0.26
                                    C9.81,8.28,8.04,10.05,6.27,11.82z" />
                            <path class="cctv1" d="M9.57,3.76C9.55,3.99,9.43,4.13,9.19,4.13c-0.23,0-0.36-0.14-0.35-0.38C8.85,3.53,8.97,3.41,9.19,3.4
                                    C9.42,3.4,9.55,3.53,9.57,3.76z" />
                        </svg>
                        <h4>sécurité sûreté</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="home-card secourisme">
                <div class="text-center">
                    <a href="">
                        <i class="fas fa-hands-helping" style="font-size: 64px;"></i>
                        <h4>secourisme</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="home-card hab-elec">
                <div class="text-center">
                    <a href="">
                        <svg version="1.1" id="flashlight" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15 15" style="enable-background:new 0 0 15 15; height: 64px;" xml:space="preserve">
                            <style type="text/css">
                                .flashlight0 {
                                    fill: #FEFEFE;
                                }
                            </style>
                            <g>
                                <g>
                                    <path class="flashlight0" d="M11.4,1.39c-0.03-0.58-0.42-0.99-0.99-1c-1.94-0.01-3.89-0.01-5.83,0C4.07,0.4,3.64,0.79,3.61,1.29
                                            c-0.04,0.66-0.06,1.34,0.03,2c0.06,0.61,0.3,1.14,0.61,1.66c0.61,1,0.87,2.07,0.77,3.25C4.97,8.77,5,9.33,5,9.91v2.78
                                            c0.01,1.16,0.7,1.87,1.86,1.93c0.42,0.01,0.85,0.01,1.27,0c1.18-0.06,1.85-0.75,1.86-1.94c0-1.55,0.03-3.09-0.01-4.63
                                            c-0.03-1.03,0.14-2,0.69-2.86C11.41,3.99,11.48,2.71,11.4,1.39z M4.59,1.09c0.08-0.01,0.18-0.01,0.27-0.01h5.3
                                            c0.3,0,0.54,0.06,0.56,0.42c0.01,0.23-0.06,0.31-0.28,0.31c-0.99-0.01-1.96,0-2.93,0c-0.96,0-1.9,0-2.86-0.01
                                            c-0.14,0-0.35,0.08-0.35-0.18C4.28,1.37,4.33,1.16,4.59,1.09z M9.36,6.58C9.31,6.84,9.3,7.09,9.3,7.36v5.16
                                            c0,1.01-0.37,1.39-1.38,1.39h-1c-0.77-0.01-1.18-0.42-1.18-1.2c-0.01-1.68-0.01-3.37,0-5.04c0.01-0.9-0.18-1.73-0.61-2.52
                                            C4.85,4.61,4.54,4.09,4.38,3.5c-0.23-0.97-0.21-1,0.76-1h2.38c0.94,0,1.9,0.01,2.85,0c0.3-0.01,0.37,0.08,0.35,0.35
                                            c-0.04,0.52-0.2,0.99-0.41,1.45C9.96,5.05,9.48,5.74,9.36,6.58z" />
                                    <path class="flashlight0" d="M7.52,7.5c-0.61,0-1.08,0.46-1.08,1.07c0,0.58,0.46,1.04,1.06,1.04c0.59,0.01,1.06-0.45,1.07-1.03
                                            C8.57,7.99,8.12,7.51,7.52,7.5z M7.48,8.91c-0.2-0.01-0.32-0.14-0.32-0.35c0-0.21,0.14-0.34,0.35-0.34c0.23,0,0.34,0.14,0.34,0.37
                                            C7.82,8.8,7.69,8.92,7.48,8.91z" />
                                </g>
                            </g>
                        </svg>
                        <h4>habilitation électrique</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CARDS SECTION END -->


<!-- ABOUT SECTION START -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="about text-center">
                    <h2>qui sommes-nous ?</h2>
                    <p>
                        Spécialisés dans la prévention des risques professionnels, nous disposons d’un réseau de
                        formateurs experts expérimentés et reconnus dans leur domaine.
                        Vos collaborateurs peuvent être formés dans nos locaux à Cannes, Antibes, Nice et Marseille ou
                        directement sur leur lieu de travail, au plus près des risques de leur métier.
                        Toutes nos formations sont 100% opérationnelles.
                    </p>
                    <a href="/presentation">
                        pourquoi nous choisir ?
                    </a>
                </div>
            </div>
            <div class="col-0 col-lg-7 unhide-large">
                <div class="wallpaper"></div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT SECTION END -->

<!-- FIGURES SECTION START-->
<div id="figures">
    <div class="container figures">
        <h2>nos statistiques</h2>
        <div class="row" id="anotherElement">
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <i class="fas fa-bookmark" style="font-size: 65px;"></i>
                    <div class="caption">
                        <h4 id="nb_formations">1542</h4>
                        <p>nombre de formations</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <i class="fas fa-users" style="font-size: 65px;"></i>
                    <div class="caption">
                        <h4 id="nb_apprenants">15158</h4>
                        <p>nombre d'apprenants</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <i class="fas fa-chart-line" style="font-size: 65px;"></i>
                    <div class="caption">
                        <h4 id="tx_reussite">87</h4>
                        <p>taux de réussite</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="text-center">
                    <i class="fas fa-percent" style="font-size: 65px;"></i>
                    <div class="caption">
                        <h4 id="insert_cqp">82</h4>
                        <p>insertion cqp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIGURES SECTION END-->

<!-- PRESENTATION SECTION START -->

<div id="presentation" class="container">
    <h3>nos valeurs</h3>
    <div id="nos-valeurs" class="row">
        <div class="col-lg-6">
            <div class="card-presentation">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <i class="fas fa-medal" style="font-size: 60px; color: #1F73BA; margin-bottom: 10px;"></i>
                    </div>
                    <div class="col-sm-10">
                        <h4>qualité</h4>
                        <ul>
                            <li>Des formations 100% conformes aux programmes officiels de l’INRS.</li>
                            <li>Une méthode d’apprentissage qui met l’acquisition des compétences au centre de nos
                                objectifs pédagogiques.</li>
                            <li>Des formateurs qualifiés expérimentés issus du terrain et recrutés selon un processus
                                rigoureux.</li>
                            <li>Une mise en place des formations et un suivi qualité minutieux.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-presentation">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <i class="fas fa-child" style="font-size: 60px; color: #1F73BA; margin-bottom: 10px;"></i>
                    </div>
                    <div class="col-sm-10">
                        <h4>humanité</h4>
                        <ul>
                            <li>La transparence sur les objectifs visés, la réalité des situations de travail, ...</li>
                            <li>L’organisation des sessions favorise l’apprentissage, l’échange entre les élèves et le
                                respect de la diversité.</li>
                            <li>Un accompagnement qui s’adapte à votre rythme d’apprentissage.</li>
                            <li>Nos sessions de formations s’orientent sur la motivation et le plaisir d’apprendre
                                ensemble.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-presentation">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <i class="fas fa-medal" style="font-size: 60px; color: #1F73BA; margin-bottom: 10px;"></i>
                    </div>
                    <div class="col-sm-10">
                        <h4>pédagogie intégrative</h4>
                        <ul>
                            <li>Identifier et répondre aux besoins de développement des compétences des collaborateurs
                                avec la réalité du terrain.</li>
                            <li>Promouvoir le transfert des acquis dans la pratique professionnelle.</li>
                            <li>Oeuvrer à la reconnaissance des programmes de formation dans un système d'accréditation
                                reconnu.</li>
                            <li>Accompagner la mobilité professionnelle et optimiser l'employabilité, notamment à
                                travers des dispositifs de validation des acquis et de l'expérience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-presentation">
                <div class="row">
                    <div class="col-sm-2 text-center">
                        <i class="fas fa-hands-helping" style="font-size: 60px; color: #1F73BA; margin-bottom: 10px;"></i>
                    </div>
                    <div class="col-sm-10">
                        <h4>partenariat et réseau</h4>
                        <ul>
                            <li>Construire une relation forte et pérenne avec nos clients et être à l’écoute de nos
                                collaborateurs.</li>
                            <li>Garantir aussi bien la qualité de nos prestations que le respect scrupuleux de nos
                                engagements.</li>
                            <li>Transmettre notre passion à travers l'engagement professionnel et le respect des valeurs
                                individuelles.</li>
                            <li>Construire des référentiels de bonnes pratiques tout en renforçant les synergies
                                interprofessionnelles et interinstitutionnelles.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3>nos formations</h3>
    <div id="nos-formations" class="row">
        <span id="presentation-secu-incendie">
            <div class="formation-card">
                <div class="text-center formation-home-animation">
                    <i class="fas fa-fire-extinguisher" style="font-size: 64px;"></i>
                    <h4>sécurité incendie</h4>
                </div>
            </div>
        </span>
        <span href="" id="presentation-surete-secu">
            <div class="formation-card">
                <div class="text-center formation-home-animation">
                    <i class="fas fa-user-secret" style="font-size: 64px;"></i>
                    <h4>sûreté sécurité</h4>
                </div>
            </div>
        </span>
        <span href="" id="presentation-secourisme">
            <div class="formation-card">
                <div class="text-center formation-home-animation">
                    <i class="fas fa-hands-helping" style="font-size: 64px;"></i>
                    <h4>secourisme</h4>
                </div>
            </div>
        </span>
        <span href="" id="presentation-hab-elec">
            <div class="formation-card">
                <div class="text-center formation-home-animation">
                    <i class="fas fa-poo-storm" style="font-size: 64px;"></i>
                    <h4>habilitation électrique</h4>
                </div>
            </div>
        </span>
    </div>
    <h3>nos partenaires</h3>
    <div id="nos-partenaires" class="row mb-5">
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_securitas.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_securitas.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_securitas.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_monte_carlo_bay.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_monte_carlo_bay.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_monte_carlo_bay.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_brinks.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_brinks.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_brinks.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_le_meridien.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_le_meridien.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_le_meridien.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_grimaldi.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_grimaldi.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_grimaldi.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_croix_blanche.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_croix_blanche.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_croix_blanche.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_radisson_blu.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_radisson_blu.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_radisson_blu.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_groupe_pastor.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_groupe_pastor.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_groupe_pastor.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_fairmont.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_fairmont.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_fairmont.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_monaco_carabiniers.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_monaco_carabiniers.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_monaco_carabiniers.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_tour_odeon.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_tour_odeon.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_tour_odeon.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_sbm_securite.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_sbm_securite.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_sbm_securite.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_boss_securite.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_boss_securite.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_boss_securite.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_onet.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_onet.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_onet.jpg" alt="">
                </picture>
            </div>
        </div>
        <div class="partenaire">
            <div class="partenaire-logo">
                <picture>
                    <source srcset="../../img/partenaires-logos/logo_inrs.webp" type="image/webp">
                    <source srcset="../../img/partenaires-logos/logo_inrs.jpg" type="image/jpg">

                    <img src="../../img/partenaires-logos/logo_inrs.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
</div>

<!-- PRESENTATION SECTION END -->