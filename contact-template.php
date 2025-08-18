<?php
/**
 * Template Name: Contact template
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
                            <div class="text-md text-center">
                                <p class="mb-3 "><?php the_field('miasto', 'options') ?> <br>
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


            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>