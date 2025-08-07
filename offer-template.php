<?php
/**
 * Template Name: Offer template
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
                    <h1 class="subtitle">Oferta</h1>
                    <h2 class="page-title"> <?php echo the_field('page-title');?>
                    </h2>

                </section>


                <section class="container section-padding container-sm">
                    <div class="offer-list_container">

                        <?php
                    if (have_rows('offer_list')): ?>
                        <?php while (have_rows('offer_list')): the_row(); 
                    $visible = get_sub_field('visible');
                    $image = get_sub_field('img'); 
                    $default_image_url = imgPath() . 'placeholder.png'; 
                    if ($visible): ?>

                        <div class="offer-list_single fadeInOnScroll">
                            <div class="offer-list_image">
                                <div style="background-color:<?php the_sub_field('color') ?>" class="shadow">
                                    <img src="<?php echo esc_url($image['url'] ?? $default_image_url); ?>"
                                        alt="<?php echo esc_attr($image['alt'] ?? 'Default image'); ?>">
                                </div>
                            </div>

                            <div class="offer-list_content">
                                <h2 class="large-subtitle"> <?php the_sub_field('title'); ?>
                                </h2>

                                <p class="text-sm"><?php the_sub_field('content'); ?> </p>
                            </div>
                        </div>
                        <?php endif; endwhile; ?>
                        <?php endif;
        
                        ?>

                    </div>

                </section>

            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>