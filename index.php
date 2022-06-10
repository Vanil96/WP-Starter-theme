<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?> 


<?php if ( is_front_page()): get_template_part( 'templates/parts/hero' );  endif; ?>

<section class="wrapper" id="index-wrapper"> 
<div class="wrapper_inner" id="content" tabindex="-1"> 

<?php get_template_part('templates/parts/left-sidebar'); ?>

 <main class="site-main" role="main">
<section class="main_inner"> 

 <?php
				if ( have_posts() ) {					
					while ( have_posts() ):
						the_post();
						get_template_part( 'templates/loops/content', get_post_format() );
					endwhile;
					wp_reset_query(); 
				} else {
					get_template_part( 'templates/loops/content', 'none' );
				}
                  wps_post_nav(); ?>

</section> <!-- /main_inner -->
</main>

<?php get_template_part('templates/parts/right-sidebar'); ?>

</div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>