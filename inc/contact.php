<div class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="columns six">
                <h2 class="contact-heading">Say <strong>Hello</strong></h2>
                <p class="contact-subheading">Don't be shy, drop us an email and say hello! We are
                    a really nice bunch of people :)</p>
                <ul class="contact-methods">
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </span>
                        +49123456789
                    </li>
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        hallo@hallo.welt
                    </li>
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </span>
                        @htmlkurs
                    </li>
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </span>
                        facebook.com
                    </li>
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </span>
                        plus.google.com
                    </li>
                    <li>
                        <span class="contact-icon">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </span>
                        pinterest.com
                    </li>
                </ul>
            </div>
            <div class="columns six">
                <?php if (isset($_GET['contacted'])): ?>
                    <p id="contact-success">Das Formular wurde erfolgreich verschickt.</p>
                <?php endif; ?>
                <form class="contact-form" action="form.php" method="POST">
                    <label for="contact-name" class="contact-label">Your Name *</label>
                    <input name="name" id="contact-name" class="contact-input" type="text" placeholder="Your Name *" required="required" />

                    <label for="contact-email" class="contact-label">Your Email *</label>
                    <input name="email" id="contact-email" class="contact-input" type="text" placeholder="Your Email *" required="required"  />

                    <label for="contact-message" class="contact-label">Your message *</label>
                    <textarea name="message" id="contact-message" class="contact-input contact-message" placeholder="Your message *" required="required"></textarea>
                    
                    <input class="contact-submit" type="submit" value="Submit message" />
                </form>
            </div>
        </div>
    </div>
</div>