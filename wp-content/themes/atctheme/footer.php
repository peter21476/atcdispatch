<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="footer-logo" src="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_footer_logo') ?>" alt="logo" />
                <div class="footer-text">
                <?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_footer_textarea') ?>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Contact</h3>
                <ul class="footer-contact">
                    <li><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_address_text') ?></li>
                    <li><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_phone_text') ?></li>
                    <li><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_email_text') ?></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-sep"></div>
                <div class="footer-copyright">
                    All contents &copy; Copyright <?php echo date('Y') ?> ATC Family Transport All rights reserved.
                </div> 
            </div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>
</body>
</html>