<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental1
 */

?>
<?php 

if (!is_page('book-appointment')) { ?>
<section id="testimonials" class="bg-white <?php echo !is_front_page() ? 'mt-10' : 'mt-4'; ?> !overflow-x-hidden">
    <!-- <div>
            <header class="flex flex-col items-center gap-2 text-center mb-2 ">
                <p class="text-primary ">Results
                </p>
                <h2 class="">DentalOne
                    <br><span class="!text-primary">Smile Gallery</span>
                </h2>
            </header>
            <div class="flex flex-col items-center gap-2 locations-description max-w-lg mx-auto mt-4">
                <p class="text-center ">Every smile is a masterpiece. Our expert team has artistically enhanced over 30,000 smiles, bringing new confidence and brilliance to every face we touch. Explore our gallery of life-changing smile makeovers and see how we can illuminate your smile too.</p>
                <a href="/results" class="link mt-4  animate__delay-1s">
                    View results
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div> -->
    <div class="pt-6 <?php echo !is_front_page() ? 'md:pb-10 md:pt-10' : 'md:pb-20 md:pt-0'; ?> max-w-screen-2xl mx-auto px-5 md:px-20 !overflow-x-hidden" id="testimonials-container">
        <?php echo do_shortcode('[reviews-feed feed=3]'); ?>
    </div>

</section>
<?php }?>
<?php

$page_slugs = array('', 'get-a-quote'); // Replace with your actual page slugs

if (is_front_page()) {
    get_template_part('components/features/homepage/Social');
} else {

    if (!is_page($page_slugs)) {
?>
        <section class="px-5 md:px-0 pt-10 bg-white pb-36  relative -mb-1 -mt-1 !overflow-x-hidden">
            <div class="service-shape-divider-bottom-1 absolute bottom-6 left-0 z-0">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="w-full h-[26px] absolute bottom-0 bg-gray-50  z-0"></div>
            <div class="service-shape-divider-bottom-2 absolute -bottom-0 left-0  z-0">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
    <?php
    }
    ?>


<?php
}

if (!is_page($page_slugs)) {
    get_template_part('components/features/homepage/Contact');
}



if (is_page('book-appointment')) { ?>
<section id="testimonials" class="bg-white <?php echo !is_front_page() ? 'mt-10' : 'mt-4'; ?> !overflow-x-hidden">
    <!-- <div>
            <header class="flex flex-col items-center gap-2 text-center mb-2 ">
                <p class="text-primary ">Results
                </p>
                <h2 class="">DentalOne
                    <br><span class="!text-primary">Smile Gallery</span>
                </h2>
            </header>
            <div class="flex flex-col items-center gap-2 locations-description max-w-lg mx-auto mt-4">
                <p class="text-center ">Every smile is a masterpiece. Our expert team has artistically enhanced over 30,000 smiles, bringing new confidence and brilliance to every face we touch. Explore our gallery of life-changing smile makeovers and see how we can illuminate your smile too.</p>
                <a href="/results" class="link mt-4  animate__delay-1s">
                    View results
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div> -->
    <div class="pt-6 <?php echo !is_front_page() ? 'md:pb-10 md:pt-10' : 'md:pb-20 md:pt-0'; ?> max-w-screen-2xl mx-auto px-5 md:px-20 !overflow-x-hidden" id="testimonials-container">
        <?php echo do_shortcode('[reviews-feed feed=3]'); ?>
    </div>

</section>
<?php }?>


</div><!-- #content -->

<?php get_template_part('template-parts/layout/footer', 'content'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/44861831.js"></script>
<!-- End of HubSpot Embed Code -->

</body>

</html>