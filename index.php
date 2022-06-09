<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?> 

<main class="main site-main" id="content" role="main">

<?php if ( is_front_page()): get_template_part( 'templates/parts/hero' );  endif; ?>

<section id="primary" class="page-content"> 
<div class="page-content_inner">

<?php get_template_part('templates/parts/left-sidebar'); ?>

 <section class="container page-container index-container"> 

 <?php
				if ( have_posts() ) {					
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
    wp_reset_query(); 
    wps_post_nav(); 
?>

 </section> <!-- /single-container -->

<?php get_template_part('templates/parts/right-sidebar'); ?>

</div> <!-- /page-content_inner -->
</section> <!-- /primary -->
 </main>

<?php get_footer(); ?>