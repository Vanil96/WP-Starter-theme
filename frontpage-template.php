<?php
/**
 * Template Name: Front_page template
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
                <section class="container section-padding container-w fadeInOnScroll" id="about-me">
                    <?php
                    $img = get_field('about_me')['img'];  ?>
                    <div class="row justify-space-between">
                        <div class="col-12 col-md-6 text-center">
                            <img src="<?php echo esc_url($img['url'] ?? imgPath() . 'photo_1.png'); ?>"
                                alt="<?php echo esc_attr($image['alt'] ?? 'Patrycja Kościelniak psycholog rzeszów'); ?>">
                        </div>
                        <div class="col-12 col-md-6 pt-4">
                            <div class="flex flex-column gap-4 justify-center h-100">

                                <h2 class="subtitle">
                                    <?php echo acfField('about_me', 'title');?>

                                </h2>

                                <div class="text-sm md:text-md lg:text-lg">
                                    <?php echo acfField('about_me', 'content');?>
                                </div>

                                <div class="hidden">
                                    <a class="btn"
                                        href="<?php echo esc_attr(acfField('about_me', 'btn_url'));?>"><?php echo acfField('about_me', 'btn_name');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container section-padding container-w fadeInOnScroll" id="offer">
                    <h2 class="subtitle text-center">Oferta</h2>
                    <h3 class="large-subtitle text-center">Oferuję pomoc w <span>następujących obszarach:</span> </h3>
                    <section class="splide" id="offer-slider">
                        <div class="splide__track">

                            <ul class="splide__list">
                                <?php display_offers_short(29) ?>
                            </ul>
                        </div>
                    </section>
                </section>

                <section class="container section-padding container-w text-center fadeInOnScroll">
                    <p class="large-subtitle">
                        <?php echo acfField('teaser_1', 'content');?>
                    </p>
                    <a class="btn"
                        href="<?php echo esc_attr(acfField('teaser_1', 'btn_url'));?>"><?php echo acfField('teaser_1', 'btn_name');?></a>
                </section>

                <section class="container section-padding container-w has-slider fadeInOnScroll" id="services">
                    <h2 class="subtitle text-center">Opinie</h2>
                    <h3 class="large-subtitle text-center"><span>Opinie</span> moich klientów</h3>

                    <section class="splide" id="opinion-slider">
                        <div class=splide__track>
                            <ul class="splide__list">
                                <?php display_opinions();?>
                            </ul>
                        </div>
                    </section>
                </section>

                <section class="container section-padding container-w fadeInOnScroll" id="blog">
                    <h2 class="subtitle text-center">BLOG</h2>
                    <h3 class="large-subtitle text-center">Najnowsze wpisy <span>blogowe</span> </h3>

                    <?php
                    $args = array(
                        'post_type'      => 'post',  
                        'posts_per_page' => 4,       
                        'orderby'        => 'date', 
                        'order'          => 'DESC',
                        'category__not_in' => array(3),  //hide seo category
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) : ?>
                    <div class="post-container">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php get_template_part('templates/loops/content', get_post_format()); ?>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata();  ?>
                    <?php endif; ?>

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