<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>
    <div class="main_content">
        <div class="m_content">
            <div class="contact-container">
                <div class="contact-form-container">
                    <h2 class="contact_title">Contact Us Today</h2>
                    <form class="contact-form" method="post" id="contactform" name="contactform" action="mail/mail.php">
                        <div class="o-input-minimal-wrapper">
                            <input type="text" class="o-input-minimal" id="name" placeholder="Name*" name="name" required="">
                            <span class="o-input-minimal_stripe"></span>
                        </div>
                        <div class="o-input-minimal-wrapper">
                            <input type="email" class="o-input-minimal" id="email" placeholder="Email*" name="email" required="">
                            <span class="o-input-minimal_stripe"></span>
                        </div>
                        <div class="o-input-minimal-wrapper">
                            <textarea class="o-textarea-minimal" id="comments" placeholder="Message*" name="comments" required=""></textarea>
                            <span class="o-input-minimal_stripe"></span>
                        </div>
                        <button id="submit" name="submit" type="submit" value="submit" class="c-contact_form_btn">
                            <span class="o-form-button_label">Send now</span>
                            <span class="o-form-button_icon">
                                <img src="">
                            </span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
