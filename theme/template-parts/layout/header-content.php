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

<header id="masthead" class="grid grid-cols-3 justify-between  items-center w-full max-w-content mx-auto py-4 px-5 lg:px-20 absolute top-0 left-[50%] -translate-x-[50%] z-50">

	<div class="md:hidden">nav</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Left  Navigation', 'dental1'); ?>" class="hidden md:block">

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main-left',
				'menu_id'        => 'main-left',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav>

	<div class="logo h-20 flex justify-center">
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

</header><!-- #masthead -->