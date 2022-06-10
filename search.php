<?php get_header(); ?>

<section class="wrapper" id="search-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">

            <?php   if (have_posts()) { ?>
            <header class="page-header">
                <?php
		         the_title(sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h1>'); ?> 
			</header><!-- .page-header -->
            <section class="main_inner">
                <?php 
				while(have_posts() ):
         		the_post();
		 		get_template_part( 'templates/loops/content', 'search' );
			    endwhile;
				wp_reset_query(); 
                } else { get_template_part( 'templates/loops/content', 'none' ); } 
?>

            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>