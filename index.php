<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?>


<?php if ( is_front_page()): get_template_part( 'templates/parts/hero' );  endif; ?>

<section class="wrapper" id="index-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">
            <section class="main_inner container container-w">

                <section class="page-header container container-w">
                    <h1 class="page-title">
                        <?php 
   					 if ( is_home() && ! is_front_page() ) {
       					 echo get_the_title( get_option('page_for_posts') ); 
   							 } else {
        					the_title();
    					}?>
                    </h1>
                </section>

                <?php   
				if ( have_posts() ) {		?>
                <div class="post-container">
                    <?php
					while ( have_posts() ):
						the_post();
						get_template_part( 'templates/loops/content', get_post_format() );
					endwhile;
					wp_reset_query(); ?>
                </div>
                <?php
				} else {
					get_template_part( 'templates/loops/content', 'none' );
				}
                 // wps_post_nav(); 
                  ?>

            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>