<?php defined( 'ABSPATH' ) || exit; ?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="page-header container container-w">

		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php wps_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content container container-w">

		<?php
		the_content();
		wps_link_pages();
		?>


	</div><!-- .entry-content -->

	<footer class="entry-footer container container-w">

		<?php wps_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
