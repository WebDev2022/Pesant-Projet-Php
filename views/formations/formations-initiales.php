<div class="main container">

    <div id="DIV1" class="row text-center mb-2 mb-md-4">
        <div class="col-sm-12 col-md-3">
            <img src="../../img/tfp-aps.jpg" alt="CPF">
        </div>
        <div class="mt-4 mt-md-0 col-sm-12 col-md-6">
            <h2>NOS FORMATIONS INITIALES </h2>
            <h4>(Toutes nos Formations sont éligibles au CPF – MON COMPTE FORMATION)</h4>
        </div>
        <div class="mt-4 mt-md-0 col-sm-12 col-md-3">
            <img src="../../img/cpf.jpg" alt="CPF">
        </div>
    </div>


    <div id="formations">
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