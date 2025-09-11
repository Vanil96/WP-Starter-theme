<?php
/**
 * Template Name: test template
 */
defined( 'ABSPATH' ) || exit;
get_header(); 
?>


<section class="wrapper" id="page-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">
            <section class="main_inner">

                <section class="page-header container container-w">
                    <h1 class="subtitle"><?php echo the_field('page-overtitle');?></h1>
                    <h2 class="page-title"> <?php echo the_field('page-title');?>
                    </h2>

                    <?php if( get_field('page-description') ): ?>
                    <p class="page-description"><?php the_field('page-description'); ?></p>
                    <?php endif; ?>
                </section>



                <section class="container section-padding container-w fadeInOnScroll" id="contact-info">

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3 class="text-lg bold-400 text-center mb-4 mt-4 clr-darkBlue">Formularz kontaktowy</span>
                            </h3>
                            <?php echo do_shortcode('[contact-form-7 id="4ecb8ce" title="Main"]'); ?>
                        </div>

                        <div class="col-12 col-md-6">
                            <h3 class="text-lg bold-400 text-center mb-4 mt-4 clr-darkBlue">Dane kontaktowe</span> </h3>
                            <div class="text-md text-center contact-details">
                                <p class="mb-3 ">
                                    <?php the_field('adres', 'options') ?> </p>

                                <p class="mb-3 "> <?php 
                                 the_field('godz_otwarcia', 'options')
                                ?> <br>
                                    <?php
                                     $tel_link = get_field('nr_telefonu_link', 'options');
                                      $tel = get_field('nr_telefonu', 'options');
                                      if ($tel_link && $tel) : ?>
                                    Tel. <a href="<?php echo esc_url($tel_link); ?>"><?php echo esc_html($tel); ?></a>
                                    <?php endif; ?> </p>

                                <p class="mb-3">
                                    <a href="mailto:kontakt@patrycjakoscielniak.pl">kontakt@patrycjakoscielniak.pl</a>
                                </p>

                                <div class="row social-icons gap-2 mt-4 m-0 justify-center">
                                    <?php display_social_links() ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="container section-padding container-w fadeInOnScroll">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.9119091523!2d21.972590977701053!3d50.06921137152186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfb9fbf099179%3A0x2627ea9b50368b1a!2sNiepubliczna%20Poradnia%20Psychologiczno%20-%20Pedagogiczna%20PODKARPACIAK!5e0!3m2!1spl!2spl!4v1757532106716!5m2!1spl!2spl"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>


                <section class="container section-padding container-w fadeInOnScroll instagram-container"
                    id="instagram">
                    <h2 class="large-subtitle text-center">Sprawdź mój instagram i bądź na bieżąco</span> </h2>
                    <section>
                        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                    </section>
                </section>


                <section class="container section-padding container-w fadeInOnScroll" id="services">
                    <h2 class="subtitle text-center">FAQ</h2>
                    <h3 class="large-subtitle text-center">Najczęściej zadawane <span>pytania</span> </h3>
                    <section class="faq-container">
                        <?php display_faq(); ?>
                    </section>
                </section>



                <section class="container section-padding container-w fadeInOnScroll">

                    <?php 
	get_template_part( 'templates/parts/newsletter' );
?>

                </section>



            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>