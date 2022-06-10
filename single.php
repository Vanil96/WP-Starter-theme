<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?>

<section class="wrapper" id="post-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">
            <section class="main_inner">

                <?php if (have_posts()){ 
       while(have_posts() ):
           the_post();  
           get_template_part('templates/loops/content', 'single' );
           wps_post_nav();

					if ( comments_open() || get_comments_number() ):comments_template(); 
          endif;
					
        endwhile;  
        wp_reset_query();
       } else {
        get_template_part( 'templates/loops/content', 'none' );
        } ?>


            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>