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
            <section class="main_inner container container-w">
                <section class="post-container ">


                    <?php 
					while(have_posts() ):
          			 the_post(); 
				     //get_template_part( 'templates/loop/content', get_post_format() ); ?>

                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <div class="post-card shadow mb-6">

                            <?php
		the_title(
			sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		); ?>

                            <a href="<?php the_permalink(); ?>" rel="bookmark" class="img-url">
                                <?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?>
                            </a>


                            <div class="post-content">
                                <div class="excerpt"> <?php the_excerpt();?> </div>
                            </div>
                        </div>
                    </article><!-- #post-## -->

                    <?php  endwhile;  wp_reset_query();?>
                </section>
            </section> <!-- /main_inner -->
            <?php } else { get_template_part( 'templates/loop/none' );}  ?>

        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>