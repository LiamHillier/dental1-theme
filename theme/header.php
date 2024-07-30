<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://static.hotjar.com">
    <link rel="preconnect" href="https://maps.googleapis.com">
    <link rel="preconnect" href="https://unpkg.com">

    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3612248,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.defer = 1; // Ensure this script does not block the rendering
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw4mjDWv-Bat8U9jtuw2mx0C4hdnKvCUA&libraries=places" async defer></script>

    <!-- Embla Carousel -->
    <script async src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

    <?php wp_head(); ?>






</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>


    <div id="page" class="">
        <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'dental1'); ?></a>

        <?php get_template_part('template-parts/layout/header', 'content'); ?>

        <div id="content">