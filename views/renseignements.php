<div class="container">
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
            <h2 class="demande-info">DEMANDE D'INFORMATIONS</h2>
            <h2><a href="tel:+33493818789">04 93 81 87 89</a></h2>
            <div class="mt-3">
                <p>Pour toutes demandes d’informations, de financements et d’inscriptions, merci de compléter le
                    formulaire ci-dessous.
                </p>
                <p>
                    <strong>Notre conseiller va prendre en charge votre demande dans les plus brefs délais.
                    </strong>
                    <br>
                    (temps de réponse estimé environ 15 minutes)
                </p>
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

                <form action="demande-de-renseignements" method="POST" enctype="multipart/form-data">
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
                    </div>

                    <div class="mb-3">
                        <textarea name="message"
                            class="form-control <?= isset($invalid_fields['message']) ? 'invalid-form' : '' ?>"
                            id="exampleFormControlTextarea1" rows="3"
                            placeholder="Votre message"><?= isset($old_values['message']) || isset($incorrect_fields['message']) ? $old_values['message'] : '' ?></textarea>
                    </div>

                    <input hidden type="text" name="_token" value="<?= $_SESSION['_token'] ?>">

                    <input type="submit" name="submit" value="Soumettre" class="btn">
                </form>
            </div>
        </div>

    </div>