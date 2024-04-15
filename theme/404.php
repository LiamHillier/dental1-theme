<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dental1
 */

get_header();
?>

<section id="primary">
	<main id="main">
		<div class="max-w-screen-2xl mx-auto px-5 md:px-20 h-screen flex items-center justify-center">
			<div>
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Page Not Found', 'dental1'); ?></h1>
				</header><!-- .page-header -->

				<div <?php dental1_content_class('page-content'); ?>>
					<p><?php esc_html_e('This page could not be found. It might have been removed or renamed, or it may never have existed.', 'dental1'); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
