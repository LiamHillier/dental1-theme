<?php

/**
 * Template name: Home
 * @package dental1
 */

get_header();
?>


<main id="main" class="">

    <?php
    get_template_part('components/features/homepage/hero/Hero');
    ?>
    <section id="testimonials" class="bg-gray-100 max-w-screen-2xl mx-auto px-10 md:px-20">
        <!-- <div>
            <header class="flex flex-col items-center gap-2 text-center mb-2 ">
                <p class="text-primary animate__initial animate__animated animate__fadeInUp">Results
                </p>
                <h2 class="animate__initial animate__animated animate__fadeInUp">DentalOne
                    <br><span class="!text-primary">Smile Gallery</span>
                </h2>
            </header>
            <div class="flex flex-col items-center gap-2 locations-description max-w-lg mx-auto mt-4">
                <p class="text-center animate__initial animate__animated animate__fadeInUp">Every smile is a masterpiece. Our expert team has artistically enhanced over 30,000 smiles, bringing new confidence and brilliance to every face we touch. Explore our gallery of life-changing smile makeovers and see how we can illuminate your smile too.</p>
                <a href="/results" class="link mt-4 animate__initial animate__animated animate__fadeInUp animate__delay-1s">
                    View results
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div> -->
        <div class="pb-20" id="testimonials-container">
            <?php echo do_shortcode('[reviews-feed feed=3]'); ?>
        </div>

    </section>
    <?php
    get_template_part('components/features/homepage/About');
    get_template_part('components/features/homepage/Services-2');
    get_template_part('components/features/homepage/Locations-2');
    get_template_part('components/features/homepage/Results');
    get_template_part('components/features/homepage/Team');
    get_template_part('components/features/homepage/Social');
    get_template_part('components/features/homepage/Contact');
    ?>

</main><!-- #main -->


<?php
get_footer();
