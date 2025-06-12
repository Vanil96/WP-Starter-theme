<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
 
<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title"><?php esc_html_e( 'Nic nie znaleziono'); ?></h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php

		if ( is_search() ) :

			printf(
				'<p>%s<p>',
				esc_html__( 'Nie znaleziono żadnych wyników dla wyszukiwanej frazy.')
			);
			//get_search_form();

		else :

			printf(
				'<p>%s<p>',
				esc_html__( 'Nie znaleziono żadnych wyników.')
			);

		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
