<footer class="main-footer container container-w links-line-hover">

    <div class="main-footer_cols row justify-space-between">

        <div class="text-center col-12 col-sm-4 col-lg-2 mt-4">
            <img class="logo" src="<?php echo imgPath('footer_logo.png'); ?>"
                alt="Patrycja Kościelniak Psycholog Rzeszów">
            <p style="font-size:19px;" class="bold-400">Patrycja Kościelniak</p>
            <p class="text-xs">psycholog</p>
        </div>

        <div class="col-12 col-sm-4 col-lg-2 mt-4">
            <p class="font-secondary font-italic text-md mb-3">Dane kontaktowe</p>

            <p class="mb-3 bold-400">Rzeszów, <br>
                ul. Przykładowa XX </p>

            <p class="mb-3 bold-400"> Pon. - Pt. 8:00 - 16:00 <br>
                Tel. <a href="tel:+48123456789">+ 48 123 456 789</a>
            </p>

            <p class="mb-3 bold-400">
                <a href="mailto:patrycja@koscielniak.pl">patrycja@koscielniak.pl</a>
            </p>

            <div class="row social-icons gap-2 mt-4 m-0">
                <div><a href="">
                        <svg class="icon icon-chevron">
                            <use xlink:href="<?php echo svgPath(); ?>#instagram"></use>
                        </svg>
                    </a></div>
                <div><a href="">
                        <svg class="icon icon-chevron">
                            <use xlink:href="<?php echo svgPath(); ?>#linkedin"></use>
                        </svg>
                    </a></div>
            </div>

        </div>
        <div class="col-12 col-sm-4 col-lg-2 mt-4">
            <p class="font-secondary font-italic text-md mb-3">Menu</p>

            <nav class="footer-menu">
                <?php
        wp_nav_menu(
            array(
            'theme_location' => 'footer_menu',
            'menu' => 'Top Navigation',
            'container' => 'ul',
            'menu_class' => 'footer-nav',
             )
         );
?>
            </nav>

        </div>
        <div class="col-12 col-lg-6 mt-4">
            <?php echo do_shortcode('[contact-form-7 id="4ecb8ce" title="Main"]'); ?>
        </div>

    </div>


    <div class="main-footer_bar">
        <div>
            <p>Wykonanie: DM</p>
        </div>
        <div><a href="hehe.jpg">Polityka prywatności</a></div>
    </div>

</footer><!-- #main-footer  -->




</div> <!-- /#page -->
<?php wp_footer(); ?>

</body>

</html>