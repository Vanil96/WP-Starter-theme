<footer class="main-footer container container-w links-line-hover">

    <div class="main-footer_cols row justify-space-between">

        <div class="text-center col-12 col-sm-4 col-lg-2 mt-4">
            <img class="logo" src="<?php echo imgPath('footer_logo.png'); ?>"
                alt="Patrycja Kościelniak Psycholog Rzeszów">
            <p style="font-size:19px;" class="bold-400">Patrycja Kościelniak</p>
            <p class="text-xs">psycholog</p>
        </div>

        <div class="col-12 col-sm-5 col-lg-3 mt-4">
            <p class="font-secondary font-italic text-md mb-3">Dane kontaktowe</p>


            <div class="mb-3 bold-400"><?php the_field('nazwa_i_adres', 'options') ?>
            </div>


            <p class="mb-3 bold-400"> <?php 
    the_field('godz_otwarcia', 'options')
?> <br>

                <?php
        $tel_link = get_field('nr_telefonu_link', 'options');
        $tel = get_field('nr_telefonu', 'options');
        if ($tel_link && $tel) : ?>
                Tel. <a href="<?php echo esc_url($tel_link); ?>"><?php echo esc_html($tel); ?></a>
                <?php endif; ?>

            </p>

            <p class="mb-3 bold-400">
                <a href="mailto:kontakt@patrycjakoscielniak.pl">kontakt@patrycjakoscielniak.pl</a>
            </p>

            <div class="row social-icons gap-2 mt-4 m-0">
                <?php display_social_links(); ?>
            </div>

        </div>
        <div class="col-12 col-sm-3 col-lg-2 mt-4">
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
        <div class="col-12 col-lg-5 mt-4">
            <?php echo do_shortcode('[contact-form-7 id="4ecb8ce" title="Main"]'); ?>
        </div>

        
    </div>


    <div class="main-footer_bar">
        <div>
            <p>Wykonanie: DM</p>
        </div>
        <div><a href="/polityka-prywatnosci">Polityka prywatności</a></div>
    </div>
</footer><!-- #main-footer  -->


<section class="floating-menu">
    <?php display_social_links(); ?>
</section>




</div> <!-- /#page -->
<?php wp_footer(); ?>

</body>

</html>