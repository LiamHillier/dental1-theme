<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental1
 */

$logo = file_get_contents('wp-content/themes/dental1/theme/assets/logos/dental1-dark.svg');

?>

<header id="masthead" class="w-screen sticky top-0 left-0 z-50 bg-transparent transition-colors duration-300 ease-in -mb-[112px] ">
	<div class="max-w-screen-2xl mx-auto py-4 px-5 md:px-20 flex justify-between items-center ">
		<div class="md:hidden">nav</div>

		<div class="logo h-20 flex justify-start">
			<a href="/"><?php echo $logo; ?></a>
		</div>

		<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Right  Navigation', 'dental1'); ?>" class="hidden md:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-right',
					'menu_id'        => 'main-right',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav>

		<div class="md:hidden flex justify-end">nav</div>
	</div>


</header><!-- #masthead -->