<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?>
<!-- Strona bloga -->


<section class="wrapper" id="index-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">


        <main class="site-main" role="main">
            <section class="main_inner container container-w">

                <section class="page-header container container-w">
                    <h1 class="subtitle"><?php echo the_field('page-overtitle', 8);?></h1>
                    <h2 class="page-title"> <?php echo the_field('page-title', 8);?>
                    </h2>

                    <?php if( get_field('page-description', 8) ): ?>
                    <p class="page-description"><?php the_field('page-description', 8); ?></p>
                    <?php endif; ?>

                </section>

                <?php   
				if ( have_posts() ) {		?>
                <div class="post-container">
                    <?php
					while ( have_posts() ):
						the_post();
						get_template_part( 'templates/loops/content', get_post_format() );
					endwhile;
					wp_reset_query(); ?>
                </div>
                <?php
				} else {
					get_template_part( 'templates/loops/content', 'none' );
				}
                 // wps_post_nav(); 
                  ?>

            </section> <!-- /main_inner -->
        </main>


    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>