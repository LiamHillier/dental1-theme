<?php

/**
 * Template name: Book Appointment
 * @package dental1
 */

get_header();
?>

<main id="main" class="bg-background">
    <?php get_template_part('components/features/book-appointment/Hero'); ?>

    <section id="appointment-frame" class="relative">
        <div class="px-5 md:px-20 max-w-screen-2xl mx-auto pb-[300px]">
            <div class="md:flex justify-between items-center mb-10">
                <header class="flex flex-col items-center gap-2 text-center mb-2 md:text-left md:items-start text-center md:text-left">
                    <p class="text-primary pre-header md:text-left animate__initial animate__animated animate__fadeInUp">
                        BOOK ONLINE</p>
                    <h2 class="text-center md:text-left  animate__initial animate__animated animate__fadeInUp">
                        Book Appointment at<br>Dental<span class="text-primary">One</span>
                </header>
            </div>


        </div>
        <div class="about-shape-divider-bottom-1 absolute bottom-6 left-0">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="w-full h-[26px] bg-gray-200 absolute bottom-0 bg-gray-50"></div>
        <div class="about-shape-divider-bottom-2 absolute -bottom-0 left-0">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-100"></path>
            </svg>
        </div>
    </section>

    <?php get_template_part('components/features/homepage/Contact'); ?>

</main>


<?php
get_footer();
