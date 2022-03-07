<!-- MAIN PAGE START -->

<div class="main">
    <div class="container">
        <div class="row p-3 p-sm-0">

            <!-- INFOS SECTION START -->

            <div class="infos-formations col-xxl-9">
                <h1><?= $formation['title']?></h1>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="anchor">
                            <a href="/">
                                <img src="../../img/small-logo.png" alt="">
                                <div class="caption">
                                    <p>enseignant</p>
                                    <h6>ERP formation</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="anchor">
                            <a href="">
                                <i class="far fa-bookmark fa-lg text-primary me-1"></i>
                                <div class="caption">
                                    <p>catégorie :</p>
                                    <h6><?= $formation['category']?></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="nav">
                        <li role="presentation"><a id="desc" href="#description" data-bs-toggle="tab"
                                class="active">description</a>
                        </li>

                        <?php if(!empty($modules)) : ?>
                        <li role="presentation"><a id="mod" href="#curriculum" data-bs-toggle="tab">modules & UV</a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($list_dates_sessions)) : ?>
                        <li role="presentation"><a id="dat" href="#announcement" data-bs-toggle="tab">prochaines dates
                                de sessions</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>

                <div class="tab-content">

                    <!-- description de la formation -->
                    <div class="tab-pane active" id="description">
                        <div class="image">
                            <img src="../../img/formations-initiales/<?= $formation['img_file'] ?>" alt="">
                        </div>

                        <?php if(!empty($warning)) : ?>
                        <div class="alert alert-warning alert-dismissible fade show mt-4 mb-4" role="alert">
                            <div class="d-flex">
                                <div class="">
                                    <strong><?= $warning[0] ?></strong>
                                    <br>
                                    <small><?= $warning[1] ?></small>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if(isset($formation['slug_title'])): ?>
                        <div class="formation-title text-center">
                            <h2>formation <span style="color: #1F73BA;"><?= $formation['slug_title'] ?></span></h2>
                            <p><?= $formation['subtitle'] ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($objectifs)): ?>
                        <div class="objectif align-items-start">
                            <div class="atom text-center">
                                <i class="fas fa-atom" style="font-size: 50px; width: 50px;"></i>
                            </div>
                            <div class="caption">
                                <h4>OBJECTIFS</h4>
                                <ul>
                                    <?php foreach($objectifs as $objectif): ?>
                                    <li><?= $objectif ?></li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="description">
                            <div class="row">
                                <div class="caption col-md-6">

                                    <!-- Recyclage -->
                                    <?php if(!empty($recyclages)): ?>
                                    <div class="mb-3">
                                        <h2><b>RECYCLAGE</b></h2>
                                    </div>

                                    <ul>
                                        <?php foreach($recyclages as $recyclage): ?>
                                        <h4><?= $recyclage[0] ?></h4>

                                        <ul class="mb-3">
                                            <?php foreach($recyclage[1] as $recyclage): ?>
                                            <li><?= $recyclage ?></li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <!-- Recyclage -->

                                    <?php if(!empty($requirements)): ?>
                                    <h4>Prérequis</h4>
                                    <!-- Pré-requis-->
                                    <ul>
                                        <?php foreach($requirements as $requirement): ?>
                                        <li><?= $requirement ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <!-- Pré-requis-->

                                    <!-- Equipements Pédagogiques -->
                                    <?php if(!empty($equipements)): ?>
                                    <h4>Equipements pédagogiques</h4>
                                    <ul>
                                        <?php foreach($equipements as $equipement): ?>
                                        <li><?= $equipement ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <!-- Equipements Pédagogiques -->
                                </div>

                                <div class="caption col-md-6">

                                    <!-- Recyclage -->
                                    <?php if(!empty($remises_a_niveau)): ?>
                                    <div class="mb-3">
                                        <h2><b>REMISE À NIVEAU</b></h2>
                                    </div>

                                    <ul>
                                        <?php foreach($remises_a_niveau as $remise): ?>
                                        <h4><?= $remise[0] ?></h4>

                                        <ul class="mb-3">
                                            <?php foreach($remise[1] as $remise): ?>
                                            <li><?= $remise ?></li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <!-- Recyclage -->


                                    <!-- Méthodes Pédagogiques -->
                                    <?php if(!empty($methods)): ?>
                                    <h4>Méthodes pédagogiques</h4>
                                    <ul>
                                        <?php foreach($methods as $method): ?>
                                        <li><?= $method ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <!-- Méthodes Pédagogiques -->


                                    <?php if(!empty($evaluations)): ?>
                                    <h4>évaluation</h4>
                                    <ul>
                                        <!-- Evaluation -->
                                        <?php foreach($evaluations as $eval): ?>
                                        <li><?= $eval ?></li>
                                        <?php endforeach; ?>
                                        <!-- Evaluation -->
                                    </ul>
                                    <?php endif; ?>

                                </div>
                                <div class="caption col-12">
                                    <?php if(!empty($public_concerned)): ?>
                                    <h4>public concerné</h4>
                                    <ul>
                                        <?php foreach($public_concerned as $public): ?>
                                        <li><?= $public ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>

                                <?php if(!empty($modules)): ?>
                                <div class="caption col-12">
                                    <div id="modules" onclick="topFunction()">
                                        <p>
                                            <i aria-hidden="true" class="far fa-hand-point-right"
                                                style="margin-right: 5px;"></i>
                                            Consulter le détail des
                                            <strong>Modules et UV</strong> de cette formation
                                        </p>
                                    </div>
                                    </a>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <!-- modules de la formation -->
                    <?php if(!empty($modules)) : ?>
                    <div class="tab-pane" id="curriculum">
                        <div class="row">

                            <?php foreach ($modules as $module) : ?>
                            <div class="module-section">
                                <h3><?= $module[0] ?></h3>

                                <?php foreach ($module[1] as $key => $list) : ?>
                                <div class="caption">

                                    <div class="number"><?= $key + 1 ?></div>
                                    <div class="icon">
                                        <i class="far fa-file-alt text-primary"></i>
                                    </div>
                                    <div class="module-title">
                                        <h5><?= $list ?></h5>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- modules de la formation -->

                    <?php if(!empty($list_dates_sessions)): ?>
                    <!-- dates de sessions -->
                    <div class="tab-pane" id="announcement">
                        <table class="table caption-top table-striped">
                            <caption><u>Prochaines dates de sessions </u>: <?= $formation['title']?></caption>
                            <tbody>
                                <?php foreach($list_dates_sessions as $session): ?>
                                <tr>
                                    <td><?= $session ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- dates de sessions -->
                    <?php endif; ?>
                </div>
            </div>

            <!-- INFOS SECTION END -->


            <!-- TERMS SECTION START -->

            <div class="infos-proccess col-xxl-3">

                <?php if(isset($formation['nb_students_registered'])) : ?>
                <div class="info">
                    <div class="caption">
                        <p>Nb. Stag. Max. : <strong><?= $formation['nb_students_registered']?> étudiants</strong></p>
                        <i class="fa fa-users fa-lg text-primary"></i>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(isset($formation['duration_hours'])) : ?>
                <div class="info">
                    <div class="caption">
                        <p>Durée : <strong><?= $formation['duration_hours']?></strong></p>
                        <i class="far fa-clock fa-lg text-primary"></i>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(isset($formation['nb_modules'])) : ?>
                <div class="info">
                    <div class="caption">
                        <p>Modules : <strong><?= $formation['nb_modules']?></strong></p>
                        <i class="fas fa-copy fa-lg text-primary"></i>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(isset($formation['level'])) : ?>
                <div class="info">
                    <div class="caption">
                        <p>Niveau: <strong><?= $formation['level']?></strong></p>
                        <i class="fas fa-chart-line fa-lg text-primary"></i>
                    </div>
                </div>
                <?php endif; ?>

                <div class="calendar">
                    <div class="caption">
                        <h6>heures d'ouverture</h6>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="day">lundi</td>
                                    <td class="timetable">09:00-12:00 | 13:00-17:00</td>
                                </tr>
                                <tr>
                                    <td class="day">mardi</td>
                                    <td class="timetable">09:00-12:00 | 13:00-17:00</td>
                                </tr>
                                <tr>
                                    <td class="day">mercredi</td>
                                    <td class="timetable">09:00-12:00 | 13:00-17:00</td>
                                </tr>
                                <tr>
                                    <td class="day">jeudi</td>
                                    <td class="timetable">09:00-12:00 | 13:00-17:00</td>
                                </tr>
                                <tr>
                                    <td class="day">vendredi</td>
                                    <td class="timetable">09:00-12:00 | 13:00-17:00</td>
                                </tr>
                                <tr>
                                    <td class="day">samedi</td>
                                    <td class="timetable">fermé</td>
                                </tr>
                                <tr>
                                    <td class="day">dimanche</td>
                                    <td class="timetable">fermé</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- TERMS SECTION END -->

        </div>
    </div>
</div>

<!-- MAIN PAGE END -->