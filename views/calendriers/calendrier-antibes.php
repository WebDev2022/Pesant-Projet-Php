<!-- BANNER SECTION START-->

<div id="banner" class="container">
    <div class="banner-title">
        <h2>calendrier des formations</h2>
    </div>
    <div class="banner-subtitle">
        <p>Planning de <strong>Formations 2022</strong> | Antibes</p>
    </div>
</div>

<!-- BANNER SECTION END-->


<div id="calendars">
    <!-- SURETE/SECURITE SECTION START -->
    <?php if(!empty($calendriers_securite)) :?>
    <div class="calendar-title-1 d-flex justify-content-center">
        formations de sûreté / sécurité
    </div>

    <section class="calendar-section-1">
        <div class="container">
            <div class="p-4 row align-items-stretch justify-content-stretch">
                <?php foreach($calendriers_securite as $calendriers): ?>
                <div class="col-md-12 col-lg-6 mb-3 mt-3">
                    <div class="content">
                        <span class="title-calendar-content"><?= $calendriers['formation_name'] ?></span>
                        <ul>
                            <?php foreach(unserialize(base64_decode($calendriers['content'])) as $session): ?>
                            <li><?= $session ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- SURETE/SECURITE SECTION END -->

    <!--FORMATION INCENDIE START -->
    <?php if(!empty($calendriers_incendie)) :?>
    <div class="calendar-title-2 d-flex justify-content-center">
        formations incendie
    </div>

    <section class="calendar-section-2">
        <div class="container">
            <div class="p-4 row align-items-stretch justify-content-stretch">
                <?php foreach($calendriers_incendie as $calendriers): ?>
                <div class="col-md-12 col-lg-4 mb-3 mt-3">
                    <div class="content">
                        <span class="title-calendar-content"><?= $calendriers['formation_name'] ?></span>
                        <ul>
                            <?php foreach(unserialize(base64_decode($calendriers['content'])) as $session): ?>
                            <li><?= $session ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!--FORMATION INCENDIE END -->


    <!--FORMATION SECOURISME START -->
    <?php if(!empty($calendriers_secourisme)) :?>
    <div class="calendar-title-3 d-flex justify-content-center">
        formations de secourisme
    </div>

    <section class="calendar-section-3">
        <div class="container">
            <div class="p-4 row align-items-stretch justify-content-stretch">
                <?php foreach($calendriers_secourisme as $calendriers): ?>
                <div class="col-md-12 col-lg-6 mb-3 mt-3">
                    <div class="content">
                        <span class="title-calendar-content"><?= $calendriers['formation_name'] ?></span>
                        <ul>
                            <?php foreach(unserialize(base64_decode($calendriers['content'])) as $session): ?>
                            <li><?= $session ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!--FORMATION SECOURISME END -->


    <!--FORMATION D'HABILITATION ELECTRIQUE START -->
    <?php if(!empty($calendriers_habilitation_électrique)) :?>
    <div class="calendar-title-4 d-flex justify-content-center">
        formations d'habilitation électrique
    </div>

    <section class="calendar-section-4">
        <div class="container">
            <div class="p-4 row align-items-stretch justify-content-stretch">
                <?php foreach($calendriers_habilitation_électrique as $calendriers): ?>
                <div class="col-md-12 col-lg-6 mb-3 mt-3">
                    <div class="content">
                        <span class="title-calendar-content"><?= $calendriers['formation_name'] ?></span>
                        <ul>
                            <?php foreach(unserialize(base64_decode($calendriers['content'])) as $session): ?>
                            <li><?= $session ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>

<!--FORMATION D'HABILITATION ELECTRIQUE END -->