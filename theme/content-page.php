<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="banner" class="relative overflow-hidden min-h-[176px] md:min-h-[200px] flex items-center justify-center">
		<div class="bg-gradient-to-t from-transparent to-white h-[180px] w-full absolute top-0 left-0 z-10"></div>
		<div class="bg-gradient-to-b from-primary to-transparent h-full w-full absolute bottom-0 left-0 z-0 opacity-70"></div>


		
		<div class="service-shape-divider-bottom-1 absolute bottom-6 left-0 ">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-100"></path>
			</svg>
		</div>
		<div class="w-full h-[26px] bg-gray-100 absolute bottom-0"></div>
		<div class="service-shape-divider-bottom-2 absolute -bottom-0 left-0">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
				<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
			</svg>
		</div>
	</div>

	<div class="relative z-10 flex flex-col items-center justify-center gap-4">

	</div>


	<div class="max-w-screen-2xl mx-auto px-5 md:px-20" <?php dental1_content_class('entry-content'); ?>>
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'dental1'),
				'after'  => '</div>',
			)
		);
		?>
	</div>



</article><!-- #post-<?php the_ID(); ?> -->