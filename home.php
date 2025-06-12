<?php defined( 'ABSPATH' ) || exit; 

get_header(); ?>
<!-- Strona bloga -->


<section class="wrapper" id="index-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">


        <main class="site-main" role="main">
            <section class="main_inner container container-w">

                <section class="page-header container container-w">
                    <h1 class="subtitle text-center">Blog</h1>
                    <h2 class="large-subtitle text-center">Wpisy blogowe <br> o psychologii <span>i nie tylko!</span> </h2>
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
                  wps_post_nav(); ?>

            </section> <!-- /main_inner -->
        </main>


    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->


<?php get_footer(); ?>