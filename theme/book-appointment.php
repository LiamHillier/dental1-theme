<?php

/**
 * Template name: Book Appointment
 * @package dental1
 */

get_header();
?>

<main id="main" class="bg-gray-100">
    <?php get_template_part('components/features/book-appointment/Hero'); ?>

    <section id="appointment-frame" class="relative">
        <div class="px-5 md:px-20 max-w-screen-2xl mx-auto pb-[300px]">
            <div class="flex justify-center items-center mb-10 mt-32">
                <header class="flex flex-col items-center gap-2 text-center mb-2 text-center ">
                    <p class="text-primary pre-header md:text-left ">
                        Book Now</p>
                    <h2 class="text-center">
                        Book Appointment at<br>Dental<span class="text-primary">One</span>
                </header>
            </div>


        </div>
       
    </section>

    <?php get_template_part('components/features/homepage/Contact'); ?>

</main>


<?php
get_footer();
