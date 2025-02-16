<?php
/**
 * Template Name: Offer template
 */
defined( 'ABSPATH' ) || exit;
get_header(); 
?>

<?php get_template_part( 'templates/parts/hero' ); ?>

<section class="wrapper" id="page-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">
            <section class="main_inner">

                <section class="container mt-8 container-w" id="about-me">
                    <div class="row justify-space-between">
                        <div class="col-12 col-md-6 text-center">
                            <img src="<?php echo imgPath() ?>photo_1.png" alt="Patrycja Kościelniak psycholog rzeszów">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="flex flex-column gap-4 justify-center h-100">

                                <h2 class="subtitle">
                                    Kilka słów o mnie
                                </h2>

                                <p class="text-lg">
                                    W swojej pracy dążę do tego, aby patrzeć na każde dziecko i młodzież w sposób
                                    indywidualny oraz holistyczny. Całościowe spojrzenie jest – moim zdaniem –
                                    niezbędne,
                                    aby jak najefektywniej móc pomóc. Mój gabinet jest miejscem wolnym od oceniania. Za
                                    to
                                    znajdują się w nim empatia, chęć pomocy, wsparcie.
                                </p>

                                <div>
                                    <button class="btn">Porozmawiajmy</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div></div>
                </section>


                <section class="container mt-8 container-w text-center" id="services">
                    <h2 class="subtitle">FAQ</h2>
                    <p class="large-subtitle">Najczęściej zadawane <span>pytania</span> </p>
                    <section class="accordion">
                        <?php display_faq(); ?>
                    </section>
                </section>
            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>