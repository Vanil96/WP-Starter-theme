
<?php get_header(); ?> 

<main class="main site-main" id="content" role="main">
<section id="primary" class="page-content single-post"> 
<div class="page-content_inner">

 <section class="container single-container"> 

    <?php if (have_posts()) {  while(have_posts() ) {
           the_post();  ?>
 
<article class="single-article">   
<header class="page-header single-post_header"> 
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium-large'); } ?>
<h1 class="single-post_title"><?php the_title(); ?> </h1>
</header> <!-- post-header -->

<div class="signle-post_content"> <?php the_content(); ?> </div>
            </article>
 
            <?php } 
            
            get_template_part('template-parts/pagination');
 } else { ?> <p class="not-found"><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?> </p> <?php } 
 wp_reset_query();
 ?>

 </section> <!-- /single-container -->
<?php get_template_part('template-parts/aside'); ?>




</div> <!-- /page-content_inner -->
</section> <!-- /primary -->
 </main>

<?php get_footer(); ?>