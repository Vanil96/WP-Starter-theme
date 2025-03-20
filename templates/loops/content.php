<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
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