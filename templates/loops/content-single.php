<?php defined( 'ABSPATH' ) || exit; ?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php wps_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		wps_link_pages();
		?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php wps_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
