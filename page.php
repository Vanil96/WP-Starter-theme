
<?php get_header(); ?> 

<main class="main site-main" id="content" role="main">

<section id="primary" class="page-content single-page"> 
<div class="page-content_inner">

<header class="page-header"> 
    <h1 class="page-title"> <?php the_title(); ?></h1> 
 </header>


    <div class="single-post_entry"> 
<?php   if (have_posts()) {while(have_posts() ) {
           the_post(); ?>
<article>
<header class="page-header single-post_header"> 
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium-large'); } ?>
	
<h1 class="single-post_title"><?php the_title(); ?> </h1>
			</header> <!-- post-header -->

<div class="single-post_content"> <?php the_content(); ?> </div>
</article>




<?php  }} else { ?> <p class="not-found"> <?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?> </p> <?php } 
wp_reset_query();
 ?>  




<div class="single-post_pagination"> 

<?php
 previous_post_link('%link', 'Poprzedni', TRUE);
  next_post_link('%link', 'Następny', TRUE);  ?>

</div>


<?php get_template_part('template-parts/aside'); ?>
  

</div>
</section>

 </main>


<?php get_footer(); ?>