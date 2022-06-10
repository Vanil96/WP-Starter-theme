<?php get_header(); ?>

<section class="wrapper" id="archive-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">

            <?php   if (have_posts()) { ?>
            <header class="page-header">
                <?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
            </header><!-- .page-header -->
            <section class="main_inner">
                <?php 
					while(have_posts() ):
          			 the_post(); 
				     //get_template_part( 'templates/loop/content', get_post_format() ); ?>
                <article>
                    <header class="page-header single-post_header">
                        <?php if ( has_post_thumbnail() ) { 
   							 the_post_thumbnail('medium-large'); } ?>
                        <h2 class="single-post_title"><?php the_title(); ?> </h2>
                    </header> <!-- post-header -->

                    <div class="single-post_content"> <?php the_content(); ?> </div>
                </article>

                <?php  endwhile;  wp_reset_query();?>

            </section> <!-- /main_inner -->
	<?php } else { get_template_part( 'templates/loop/none' );}  ?>

        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>