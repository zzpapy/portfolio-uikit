<aside class="recrute_title">
    <div>
        <strong>Contact</strong>
    </div>
</aside>
<aside class="wrapp_recrute">
    <div class="ferme"><i class="far fa-times-circle fa-2x"></i></div>
    <div class="recrute">
        <h1>Contact</h1>
        <div id="contact-form">
            <form id="contact_rec1" action="apps/contact.php" method="POST">
                <div>
                    <label for="name">
                        <span class="required">Nom: *</span>
                        <input placeholder="Nom" name="nom" type="text" tabindex="1" required>
                    </label>
                </div>
                <div>
                    <label for="prenom">
                        <span class="required">Prénom: *</span>
                        <input placeholder="Prénom" name="prenom" type="text" tabindex="1" required>
                    </label>
                </div>
                <div>
                    <label for="email">
                        <span class="required">Email: *</span>
                        <input placeholder="Adresse Email" name="mail" type="text" tabindex="2" required>
                    </label>
                </div>
                <div>
                    <label for="tel">
                        <span class="required">Téléphone: *</span>
                        <input placeholder="Téléphone" name="tel" type="tel" tabindex="3" required>
                    </label>
                </div>

                <div>
                    <label for="message">
                        <span class="required">Message: *</span>
                        <textarea placeholder="Votre message ici." name="mess" tabindex="4" required></textarea>
                    </label>
                </div>
                <div>
                    <input name="Envoyer" type="submit" value="envoyer">
                </div>
            </form>
        </div>
    </div>
</aside>