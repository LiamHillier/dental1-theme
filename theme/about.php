<?php

/**
 * Template name: About
 * @package dental1
 */

get_header();
?>

<main id="main" class="bg-background">
    <?php get_template_part('components/features/about/Hero'); ?>

    <section id="about" class="text-center max-w-screen-2xl mx-auto px-5 md:px-20 pb-20">
        <div class="max-w-[650px] mx-auto mb-20">
            <p class="mb-2 pre-header animate__initial animate__animated animate__fadeInUp">ABOUT US</p>
            <h2 class="mb-4 animate__initial  animate__animated animate__fadeInUp uppercase font-base">Why
                dental <span class="text-primary">ONE</span>
            </h2>
            <p class="font-bold text-black my-10 animate__initial  animate__animated animate__fadeInUp">Dental One was
                created to make Dentistry more affordable and
                accessible
                in
                Australia,
                starting with our home state of Victoria.</p>
            <p class=" animate__initial  animate__animated animate__fadeIn">Cost has long been sighted as the number
                one reason people avoid visiting the dentist. At Dental One we
                aim
                to remove this obstacle and usher in a new wave of Affordable Dental Care for all. You can expect the
                same
                quality and professional treatment from our Dentists as you would anywhere else. We are focused on
                providing
                the best outcome for our patients and ensuring only the best long-term treatment options are followed.

                <br><br>
                Within Dental One’s team, there are many languages other than English that are spoken to assist our
                patients
                with communication. The many languages spoken include:
                <br><br>
                Mandarin, Cantonese, French, Vietnamese, Japanese, Turkish, Arabic, Lebanese, Egyptian, Spanish, Samoan,
                Filipino, Italian, Syriac, Cambodian, Hindi, Punjabi and Nepali.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-12 animate__i">
            <img srcset="/wp-content/themes/dental1/theme/assets/images/about/dental1-about-1-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/about/dental1-about-1-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/about/dental1-about-1-800w.avif 800w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (min-width: 601px) 800px" src="/wp-content/themes/dental1/theme/assets/images/about/dental1-about-1.png" alt="dental one reception" width="928" height="1316" loading="lazy" class="animate__initial animate__animated animate__fadeIn" />
            <img srcset="/wp-content/themes/dental1/theme/assets/images/about/dental1-about-2-400w.avif 400w" sizes="" src="/wp-content/themes/dental1/theme/assets/images/about/dental1-about-2.png" alt="Dental 1 Nurse" width="464" height="658" loading="lazy" class="animate__initial animate__animated animate__fadeIn animate__delay-0_2s" />
            <img srcset="/wp-content/themes/dental1/theme/assets/images/about/Mask-group-(1)-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/about/Mask-group-(1)-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/about/Mask-group-(1)-800w.avif 800w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (min-width: 601px) 800px" src="/wp-content/themes/dental1/theme/assets/images/about/Mask group (1).png" alt="Dental 1 Shop" width="928" height="1296" loading="lazy" class="animate__initial animate__animated animate__fadeIn animate__delay-0_4s" />
        </div>

    </section>

    <?php get_template_part('components/features/homepage/Team'); ?>

    <div class="bg-white relative">
        <div class="service-shape-divider-bottom-1 ">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#f3f4f6"></path>
            </svg>
        </div>


    </div>

    <?php get_template_part('components/features/homepage/Contact'); ?>

</main>


<?php
get_footer();
