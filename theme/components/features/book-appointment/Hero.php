<?php
$doubledash = file_get_contents('wp-content/themes/dental1/theme/assets/icons/double-dash.svg');
?>

<section id="about-hero" class="relative flex flex-col justify-between items-center max-w-screen-2xl mx-auto pt-[140px] md:flex-row md:pt-0 h-[90vh]">
    <div class="flex flex-col items-center justify-center ml-5 md:ml-20 relative z-10">
        <span class="font-accent hero-text-medium animate__animated animate__fadeInUp text-center md:text-left">Welcome to Dental<span class="text-primary">One</span></span>
        <h1 class="font-secondary hero-text-large capitalize text-neutral-800  animate__animated animate__fadeInUp  px-5 md:px-0 text-center md:text-left">
            Book An</h1>
        <div class="flex gap-0 items-center mt-4 justify-center">
            <div class=" hidden md:block w-3/12 animate__animated animate__lightSpeedInLeft animate__delay-1s">
                <?php echo $doubledash; ?></div>
            <h2 class="font-secondary hero-text-medium text-primary  capitalize animate__animated animate__fadeInUp">Appointment</h2>
        </div>
    </div>
    <img srcset="/wp-content/themes/dental1/theme/assets/images/book-appointment/d1book-appointment-banner-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/book-appointment/d1book-appointment-banner-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/book-appointment/d1book-appointment-banner-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/book-appointment/d1book-appointment-banner-1000w.avif 1000w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (min-width: 801px) 1000px" src="/wp-content/themes/dental1/theme/assets/images/book-appointment/d1book-appointment-banner.png" alt="Dental One Reception" width="1154" height="1159" class="w-[150vw] max-w-[150vw] md:w-auto max-h-[90vh] object-contain object-right absolute right-0 z-0 top-[200px] md:top-0 md:max-w-[70vw]" />
</section>