<div class="main container">

    <div id="DIV1" class="row text-center mb-2 mb-md-4">
        <div class="col-sm-12 col-md-3">
            <img src="../../img/tfp-aps.jpg" alt="CPF">
        </div>
        <div class="mt-4 mt-md-0 col-sm-12 col-md-6">
            <h2>FORMATIONS A RENOUVELER</h2>
            <h4>(Toutes nos Formations sont éligibles au CPF – MON COMPTE FORMATION)</h4>
        </div>
        <div class="mt-4 mt-md-0 col-sm-12 col-md-3">
            <img src="../../img/cpf.jpg" alt="CPF">
        </div>
    </div>

    <!-- BANNER SECTION START-->

    <div id="formations-a-renouveler" class="container">
        <div class="faq">
            <h3>Comment ça marche ?</h3>
        </div>
        <div class="captions">
            <div class="row">
                <div class="col-md-6 caption">
                    <h4>(mac) cqp-aps maintient des acquis et des compétences</h4>
                    <p>Vous vous posez la question concernant le renouvellement de votre carte professionnelle qui a une
                        durée de validité de 5 ans. Vous devez être détenteur d’un secourisme <strong>SST PSC1 PSE1
                            PSE2</strong> (valide de moins de 2 ans).</p>
                    <p>Important : LE CNAPS « Conseil national des activités privés de sécurité » préconise un délai de
                        3 mois avant péremption pour tout renouvèlement de la carte professionnelle.</p>
                    <p>Vous devez effectuer un maintient des acquis <strong>(MAC CQP-APS) de 24h</strong> que se soit
                        avant ou après la date de validité de votre carte professionnelle valable 5 ans.</p><br>
                    <h4>(mac) sst maintient des acquis</h4>
                    <p>Après avoir passé votre SST d’une validité de 2 ans et de formation de 14h, vous devez passer un
                        maintient des acquis <strong>(MAC) SST durée 7h</strong> et de <strong>validité 2 ans</strong>
                        afin de renouveler votre carte SST.</p>
                </div>
                <div class="col-md-6 caption">
                    <h4>recyclage / remise à niveau - SSIAP 1-2-3</h4>
                    <p>Vous vous posez la question concernant la remise à niveau ou le recyclage de votre diplôme SSIAP
                        1-2-3 qui a une durée de validité de 3 ans. Vous devez être détenteur d’un secourisme
                        <strong>SST PSC1 PSE1 PSE2</strong> (valide de moins de 2 ans).</p>
                    <p> <strong>1er cas :</strong> Vous êtes prévoyant et souhaitez faire le nécessaire avant la fin des
                        3 ans de validité de votre diplôme « ayant eu une activité professionnelle ou pas » vous n’aurez
                        qu’a faire un recyclage de <strong>14h pour le SSIAP1-2</strong> et de <strong>21h pour les
                            SSIAP3</strong>.</p>
                    <p> <strong>2e cas :</strong> Vous êtes titulaire du SSIAP 1-2-3 depuis 3 ans passé, sans n’avoir eu
                        aucune expérience professionnelle. Vous devrez effectuer une remise à niveau de <strong>21h pour
                            les SSIAP1-2</strong> et de <strong>35h pour les SSIAP3</strong>.</p>
                    <p> <strong>3e cas :</strong> Si au contraire vous justifier de 1607h durant les 36 derniers mois
                        vous devrez effectuer un recyclage de <strong>14h pour les SSIAP1-2</strong> et de <strong>21h
                            pour les SSIAP3</strong>.</p>
                </div>
                <div class="col-md-6 caption">
                    <h4>(mac) PSE1-2 maintient des acquis</h4>
                    <p>Après avoir passé votre PSE1-2 formation 35h d’une validité de 2 ans dans le secteur de la
                        sécurité, vous devez passer un maintient des acquis <strong>(MAC) PSE1-2 de 7h</strong> de
                        formation tous les 2 ans.</p>
                </div>
                <div class="col-md-6 caption">
                    <h4>(mac) PSC1 maintient des acquis</h4>
                    <p>Après avoir passé votre PSC1 formation 7h d’une validité de 2 ans dans le secteur de la sécurité,
                        afin d’être à jour, vous devez le repasser tous les 2 ans (Formation <strong>7h</strong>).</p>
                </div>
            </div>
        </div>
        <div class="line-divider">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="line"></div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <!-- BANNER SECTION END-->


    <div class="formations">
        <div id="DIV2" class="row align-items-stretch">

            <?php if(!empty($formations)):?>
            <div class="d-flex flex-wrap justify-content-center text-center mt-5">
                <?php foreach ($formations as $formation) : ?>
                <div class="thumbnail d-flex flex-column mb-4">

                    <div>
                        <a href="formation-initiale-<?= $formation['id'] ?>">
                            <img src="../../img/formations-initiales/<?= $formation['img_file'] ?>" alt="TFP-APS">
                        </a>
                    </div>

                    <div class="mt-2">
                        <p class="subtitle"><?= $formation['category'] ?></p>
                        <a href="">
                            <h5><?= $formation['title'] ?></h5>
                        </a>
                    </div>

                    <?php if(isset($formation['duration_hours'])) : ?>
                    <div class="time mt-auto">
                        <i class="far fa-clock"></i>
                        <?= $formation['duration_hours'] ?>
                    </div>
                    <?php endif; ?>

                    <div class="hidden">
                        <div class="logo">
                            <img src="../../img/small-logo.png" alt="logo">ERP Formation
                        </div>
                        <div class="caption">
                            <h4><?= $formation['title'] ?></h4>
                            <p><?= $formation['preview_description'] ?></p>
                        </div>
                        <div class="infos">
                            <div class="row text-center">

                                <div class="col-4">
                                    <i class="fas fa-signal"></i> <span class="size"><?= $formation['level'] ?></span>
                                </div>

                                <?php if(isset($formation['nb_modules'])) : ?>
                                <div class="col-4">
                                    <i class="fas fa-list-ul"></i> <span class="size"><?= $formation['nb_modules'] ?>
                                        modules</span>
                                </div>
                                <?php endif; ?>

                                <?php if(isset($formation['duration_hours'])) : ?>
                                <div class="col-4">
                                    <i class="far fa-clock"></i> <span
                                        class="size"><?= $formation['duration_hours'] ?></span>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="btn-prev">
                            <a href="formation-initiale-<?= $formation['id'] ?>">Prévisualisez ce cours</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>