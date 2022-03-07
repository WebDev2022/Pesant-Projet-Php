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
        <h2>NOUS CONTACTER <br> <a href="tel:+33493446823">04 93 44 68 23</a></h2>
        <p><span class="span-gray"> Horaires d’ouverture :</span> du lundi au vendredi – 9h à 12h et de 13h à 17h</p>
    </div>
</div>

<div class="container">
    <div id="centres-formation" class="row">
        <div class="col-md-6">
            <div class="centres">
                <ul>
                    <li>
                        <div class="infos">
                            <div class="icon-left"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="icon-text">
                                <h5>Siège social Nice :</h5>
                                <p>7, Rue de Dijon - 06000 Nice</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="infos">
                            <div class="icon-left"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="icon-text">
                                <h5>Centre Marseille :</h5>
                                <p>10, Boulevard Tisseron - 13014 Marseille</p>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="infos">
                            <div class="icon-left"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="icon-text">
                                <h5>Centre Antibes : </h5>
                                <p>1770, Route de Grasse - 06600 Antibes</p>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.1730315109494!2d7.260336615788411!3d43.70695305697061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd006e1ed62d3%3A0x81657ea829b6ee3!2s7%20Rue%20de%20Dijon%2C%2006000%20Nice!5e0!3m2!1sfr!2sfr!4v1641890315622!5m2!1sfr!2sfr"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


    </div>
</div>

<div class="container">
    <div id="formulaire">
        <div class="row text-center">
            <div class="networks-2">
                <a href="https://www.facebook.com/search/top?q=erp%20formation">
                    <i aria-hidden="true" class="fab fa-facebook" style="color: #1F73BA;"></i>
                </a>
                <a href="https://www.instagram.com/erp_formation/">
                    <i aria-hidden="true" class="fab fa-instagram" style="color: #BA1F78;"></i>
                </a>
            </div>
        </div>
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

            <form action="contact" method="POST" enctype="multipart/form-data">
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