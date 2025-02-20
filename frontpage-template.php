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
                <section class="container section-padding container-w" id="about-me">
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

                                <div class="sm:text-lg">
                                    <?php echo acfField('about_me', 'content');?>
                                </div>

                                <div>
                                    <a class="btn"
                                        href="<?php echo esc_attr(acfField('about_me', 'btn_url'));?>"><?php echo acfField('about_me', 'btn_name');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container section-padding container-w " id="offer">
                    <h2 class="subtitle text-center">Oferta</h2>
                    <p class="large-subtitle text-center">Oferuję pomoc w <span>następujących obszarach:</span> </p>
                    <section class="splide" id="offer-slider">
                        <div class=splide__track>

                            <ul class="splide__list">
                                <?php display_offers_short(29) ?>
                            </ul>
                        </div>
                    </section>
                </section>

                <section class="container section-padding container-w text-center">
                    <p class="large-subtitle">
                    <?php echo acfField('teaser_1', 'content');?>
                    </p>
                    <a class="btn"
                    href="<?php echo esc_attr(acfField('teaser_1', 'btn_url'));?>"><?php echo acfField('teaser_1', 'btn_name');?></a>                </section>

                <section class="container section-padding container-w has-slider" id="services">
                    <h2 class="subtitle text-center">Opinie</h2>
                    <p class="large-subtitle text-center"><span>Opinie</span> moich klientów</p>

                    <section class="splide" id="opinion-slider">
                        <div class=splide__track>
                            <ul class="splide__list">
                                <?php display_opinions();?>
                            </ul>
                        </div>
                    </section>
                </section>


                <section class="container section-padding container-w" id="services">
                    <h2 class="subtitle text-center">FAQ</h2>
                    <p class="large-subtitle text-center">Najczęściej zadawane <span>pytania</span> </p>
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