<div class="container">
    <?php if (isset($message_success)) : ?>
    <div class="text-center message-success mb-4">
        <h3><?= $message_success ?></h3>
    </div>
    <?php endif; ?>

    <!-- INVALID FIELDS ERROR MESSAGE -->
    <?php if (!empty($invalid_fields)) : ?>
    <div class="text-center message-invalid mb-4">
        <h3>Vous avez rencontré un problème avec le formulaire, veuillez réessayer !</h3>
    </div>
    <?php endif; ?>
    <!-- INVALID FIELDS ERROR MESSAGE -->

    <div class="ban" class="row text-center">
        <h2>TROUVER VOTRE EMPLOI !</h2>

        <div class="mt-3 search-job">
            <p><strong class="span-gray">Un emploi qui ne connaît pas la crise.</strong> Avec plus d’une centaine de
                demandes d’emplois mensuels de la part de nos
                partenaires, le secteur de la
                sécurité incendie et de la
                sécurité sûreté est de loin, l’un des secteurs les plus prometteurs du marché du travail Français.
            </p>
            <br>
            <p>Notre engagement est d’assurer votre réussite par nos formations, grâce à nos formateurs. Rendre visible
                votre CV auprès de tous les acteurs du secteur de la sécurité est impératif. Pour ce faire, merci de
                nous transmettre votre <strong>CV</strong> via le champ ci-dessous.
            </p>
        </div>

        <div class="diplom-recrutement mt-4">
            <p>Pas encore diplômé ?!</p>
            <div class="btn en-savoir-plus">
                <a href="inscription">
                    <div class="btn-more">
                        <i aria-hidden="true" class="far fa-hand-point-right" style="margin-right: 5px;"></i>
                        Réservez
                    </div>
                </a>
            </div>
            <p>Votre formation.</p>
        </div>
    </div>

    <div id="formulaire">
        <div class="container-erp-form">

            <!-- INVALID FIELDS ERRORS -->
            <?php if (!empty($invalid_fields)) : ?>
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    <?php foreach ($invalid_fields as $field) : ?>
                    <li> <i class="fas fa-exclamation-circle"></i> <?= $field ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <form action="recrutement" method="POST" enctype="multipart/form-data">
                <div class="row g-2">
                    <div class="col-12 mb-3">
                        <div class="form-text">* mentions obligatoires</div>
                    </div>
                    <div class="col-12 mb-3">
                        <input name="name" type="text"
                            class="form-control <?= isset($invalid_fields['name']) ? 'invalid-form' : '' ?>"
                            placeholder="Votre nom *"
                            value="<?= isset($old_values['name']) ? $old_values['name'] : '' ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <input name="phone" type="tel"
                            class="form-control <?= isset($invalid_fields['phone']) ? 'invalid-form' : '' ?>"
                            placeholder="Téléphone *"
                            value="<?= isset($old_values['phone']) ? $old_values['phone'] : '' ?>">
                    </div>
                    <div class="col-12 mb-3">
                        <input name="email" type="text"
                            class="form-control <?= isset($invalid_fields['email']) ? 'invalid-form' : '' ?>"
                            placeholder="Votre Email *"
                            value="<?= isset($old_values['email']) ? $old_values['email'] : '' ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <p>Vous pouvez joindre un ou plusieurs fichier(s) (au format .PDF, .JPG ou .DOC)</p>
                    <label for="formControlFile1"
                        class="d-flex justify-content-between align-items-center<?= isset($invalid_fields['error_size']) || isset($invalid_fields['error_extension']) ? 'invalid-form' : '' ?>">
                        Choisir des fichiers...
                        <?php if (isset($invalid_fields['error_size']) || isset($invalid_fields['error_extension'])) : ?>
                        <i class="text-danger fas fa-exclamation-triangle"></i>
                        <?php endif; ?>
                        <i class="text-success d-none fas fa-check-circle fa-lg"></i>
                    </label>
                    <input type="file" name="files[]" id="formControlFile1" accept=".jpg,.png,.pdf,.doc,.docx" multiple
                        class="form-control-file">
                </div>
                <div class="mb-3">
                    <textarea name="message"
                        class="form-control <?= isset($invalid_fields['message']) ? 'invalid-form' : '' ?>"
                        id="exampleFormControlTextarea1" rows="3"
                        placeholder="Votre message *"><?= isset($old_values['message']) || isset($incorrect_fields['message']) ? $old_values['message'] : '' ?></textarea>
                </div>

                <input hidden type="text" name="_token" value="<?= $_SESSION['_token'] ?>">

                <input type="submit" name="submit" value="Soumettre" class="btn">
            </form>
        </div>
    </div>
</div>