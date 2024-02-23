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

<header id="masthead" class="w-screen sticky top-0 left-0 z-50 bg-transparent transition-colors duration-300 ease-in -mb-[112px]">
	<div class="max-w-screen-2xl mx-auto py-4 px-10 md:px-20 flex justify-between items-center ">
		<div class="logo h-full flex justify-start items-center">
			<a href="/"><?php echo $logo; ?></a>
		</div>
		<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Right  Navigation', 'dental1'); ?>" class="hidden md:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-right',
					'menu_id'        => 'main-right',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					'walker'         => new WP_Bootstrap_Navwalker(), // Use your custom walker here
				)
			);
			?>
		</nav>
		<div class="md:hidden flex items-center gap-4">
			<a class=" button primary" href="/book-appointment">book now</a>
			<div class="flex justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-menu">
					<line x1="3" y1="12" x2="21" y2="12" />
					<line x1="3" y1="6" x2="21" y2="6" />
					<line x1="3" y1="18" x2="21" y2="18" />
				</svg></div>
		</div>


	</div>


</header><!-- #masthead -->

<div class="mobile-menu hidden md:hidden flex flex-col items-stretch justify-start fixed w-screen h-screen bg-white top-0 z-50 pt-24 px-10">
	<div class="w-12 absolute top-14 left-10">
		<?php echo file_get_contents('wp-content/themes/dental1/theme/assets/logos/icon.svg'); ?>
	</div>

	<div class="flex justify-end absolute top-16 right-10">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary fill-primary menu-close">
			<line x1="18" y1="6" x2="6" y2="18" />
			<line x1="6" y1="6" x2="18" y2="18" />
		</svg>
	</div>
	<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Right  Navigation', 'dental1'); ?>" class="mt-20">
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
</div>