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
    <link rel="profile" href="https://gmpg.org/xfn/11">

    
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-3Y8YKWQB9B"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-3Y8YKWQB9B'); </script>

    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

    <?php wp_head(); ?>
    





</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>


    <div id="page" class="">
        <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'dental1'); ?></a>

        <?php get_template_part('template-parts/layout/header', 'content'); ?>

        <div id="content">