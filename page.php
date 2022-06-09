<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?> 

<main class="main site-main" id="content" role="main">
<?php if ( is_front_page()): get_template_part( 'templates/parts/hero' );  endif; ?>

<section id="primary" class="page-content"> 
<div class="page-content_inner">

 <section class="container page-container"> 

    <?php if (have_posts()): 
       while(have_posts() ):
           the_post();  
           get_template_part('templates/loops/content', 'page' );
           //wps_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ):comments_template(); endif;
					
        endwhile;  
      else: ?> 
      <p class="not-found"><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?> </p> 
      <?php endif; 
      wp_reset_query(); 
      ?>

 </section> <!-- /single-container -->
<?php get_template_part('templates/parts/aside'); ?>


</div> <!-- /page-content_inner -->
</section> <!-- /primary -->
 </main>

<?php get_footer(); ?>