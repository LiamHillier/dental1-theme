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


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-969056386"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-969056386');
    </script>

    <script data-cfasync="false" data-pagespeed-no-defer>
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
    </script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N83JQBL');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-969056386/v1zlCLDNs8sBEILBis4D',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw4mjDWv-Bat8U9jtuw2mx0C4hdnKvCUA&libraries=places" async defer></script>

    <!-- Embla Carousel -->
    <script  src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

    <!-- Facebook Pixel Code -->
    <script async defer>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '710783542309973', {}, {
            "agent": "wordpress-6.4.5-1.6.0"
        });

        fbq('track', 'PageView', {
            "source": "wordpress",
            "version": "6.4.5",
            "pluginVersion": "1.6.0"
        });
    </script>

    <!-- End Facebook Pixel Code -->
    <!-- WordPress Facebook Integration end -->

    <!-- Facebook Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=710783542309973&ev=PageView&noscript=1" />
    </noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <!-- Meta Pixel Code -->
    <script type='text/javascript'>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js?v=next');
    </script>
    <!-- End Meta Pixel Code -->

    <script type='text/javascript'>
        var url = window.location.origin + '?ob=open-bridge';
        fbq('set', 'openbridge', '710783542309973', url);
    </script>
    <script type='text/javascript'>
        fbq('init', '710783542309973', {}, {
            "agent": "wordpress-6.4.5-3.0.14"
        })
    </script>
    <script type='text/javascript'>
        fbq('track', 'PageView', []);
    </script>
    <!-- Meta Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id=710783542309973&ev=PageView&noscript=1" />
    </noscript>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W62XRBP');
    </script>
    <!-- End Google Tag Manager -->
    <!-- End Meta Pixel Code -->
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <!-- WordPress Facebook Integration end -->

    <!-- Facebook Pixel Code -->

    <?php wp_head(); ?>






</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>


    <div id="page" class="">
        <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'dental1'); ?></a>

        <?php get_template_part('template-parts/layout/header', 'content'); ?>

        <div id="content">