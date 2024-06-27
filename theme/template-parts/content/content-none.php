<?php
/**
 * Template part for displaying a message when posts are not found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental1
 */

?>

<section>

	<div class="max-w-screen-2xl mx-auto px-5 md:px-20 pt-10" <?php dental1_content_class('page-content'); ?>>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>

			<p>
				<?php esc_html_e( 'Your site is set to show the most recent posts on your homepage, but you haven&rsquo;t published any posts.', 'dental1' ); ?>
			</p>

			<p>
				<a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">
					<?php
					/* translators: 1: link to WP admin new post page. */
					esc_html_e( 'Add or publish posts', 'dental1' );
					?>
				</a>
			</p>

			<?php
		elseif ( is_search() ) :
			?>

			<p class="text-center">
				<?php esc_html_e( 'Your search generated no results. Please try a different search.', 'dental1' ); ?>
			</p>

			<div class="mx-auto max-w-lg mt-10 alt-search">
			<?php get_search_form(); ?>
			</div>
			<?php
			
		else :
			?>

			<p>
				<?php esc_html_e( 'No content matched your request.', 'dental1' ); ?>
			</p>

			<?php
			get_search_form();
		endif;
		?>
	</div><!-- .page-content -->

</section>
