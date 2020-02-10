<section id="contact" class="contact" data-scroll>
                    <h1 class="uk-heading-line uk-heading-large uk-text-center">Contact</h1>
                    <div id="contact-form">
                        <form id="contact_rec" action="apps/contact.php" method="POST">
                            <div>
                                <label class="uk-flex uk-flex-center uk-flex-around uk-flex-wrap uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l"for="name">
                                    <span class="required">Nom: *</span>
                                    <input placeholder="Nom" name="nom" type="text" tabindex="1" required>
                                </label>
                            </div>
                            <div>
                                <label class="uk-flex uk-flex-center uk-flex-around uk-flex-wrap uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l" for="prenom">
                                    <span class="required">Prénom: *</span>
                                    <input placeholder="Prénom" name="prenom" type="text" tabindex="1" required>
                                </label>
                            </div>
                            <div>
                                <label class="uk-flex uk-flex-center uk-flex-around uk-flex-wrap uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l"for="email">
                                    <span class="required">Email: *</span>
                                    <input placeholder="Adresse Email" name="mail" type="text" tabindex="2" required>
                                </label>
                            </div>
                            <div>
                                <label class="uk-flex uk-flex-center uk-flex-around uk-flex-wrap uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l"for="tel">
                                    <span class="required">Téléphone:</span>
                                    <input placeholder="Téléphone" name="tel" type="tel" tabindex="3" required>
                                </label>
                            </div>

                            <div>
                                <label class="uk-flex uk-flex-center uk-flex-around uk-flex-wrap uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l"for="message">
                                    <span class="required">Message: *</span>
                                    <textarea placeholder="Votre message ici." name="mess" tabindex="4" required></textarea>
                                </label>
                            </div>
                            <div>
                                <input name="Envoyer" type="submit" value="envoyer">
                            </div>
                        </form>
                    </div>
                </section>