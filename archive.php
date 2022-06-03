
<?php get_header(); ?> 

<main class="main site-main" id="content" role="main">
<section id="primary" class="page-content archive"> 
<div class="page-content_inner">

<header class="page-header">
    <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
</header>


    <div class="container archive-container"> 
<?php   if (have_posts()) {while(have_posts() ) {
           the_post(); ?>
<article>
<header class="page-header single-post_header"> 
<?php if ( has_post_thumbnail() ) { 
    the_post_thumbnail('medium-large'); } ?>
 <h2 class="single-post_title"><?php the_title(); ?> </h2>
			</header> <!-- post-header -->

<div class="single-post_content"> <?php the_content(); ?> </div>
</article>




<?php  }} else { ?> <p class="not-found"> <?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?> </p> <?php } 
wp_reset_query();
 ?>  

</div> <!-- /container -->

<?php get_template_part('template-parts/aside'); ?>
  



</div> <!-- /page-content_inner -->
</section> <!-- /primary -->
 </main>


<?php get_footer(); ?>