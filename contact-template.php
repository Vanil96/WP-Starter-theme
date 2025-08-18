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


                <section class="container section-padding container-w fadeInOnScroll instagram-container" id="instagram">
                    <h2 class="large-subtitle text-center">Zaobserwuj instagram i bądź na biężąco!</span> </h2>
                    <section>
                        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                    </section>
                </section>


            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>