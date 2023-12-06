<?php

/**
 * Add custom menus
 *
 * @package dental1
 */

function register_custom_menus()
{
    register_nav_menus(
        array(
            'main-left'   => esc_html__('Main Left', 'dental1'),
            'main-right' => esc_html__('Main Right', 'dental1'),
        )
    );
}
add_action('init', 'register_custom_menus');
