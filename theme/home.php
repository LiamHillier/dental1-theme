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
    <div class="bg-gray-100">
        <section class="bg-gray-100 pt-4 pb-20 max-w-screen-2xl mx-auto px-5 md:px-20 ">
            <div class="  bg-primary rounded-3xl text-white px-10 py-10 grid md:grid-cols-2">
                <div class="flex flex-col gap-2 items-start">
                    <h2>
                        Dental Emergencies
                    </h2>
                    <h2>
                        1300 066 427
                    </h2>
                    <a href="/dental-emergencies/" class="outline button mt-4">Learn more</a>

                </div>
                <div>
                    <p class="text-white mt-4 md:mt-0 hidden md:block">Dental emergencies can happen and when they do it is best to be prepared – Knowing who to contact, how to identify pain and where to go. The best person to contact in a dental emergency is a dentist, however out of hours emergencies will require a different approach. It is important to remember that seeing a dentist within 30 minutes or less can mean the difference between saving or losing your tooth.</p>
                </div>
            </div>
        </section>
    </div>

    <?php
    get_template_part('components/features/homepage/About');
    get_template_part('components/features/homepage/Services-2');
    get_template_part('components/features/homepage/Locations-2');
    get_template_part('components/features/homepage/Results');
    get_template_part('components/features/homepage/Team');
    ?>
    <section id="services" class="bg-white pt-20 pb-[140px]">
        <div class="px-5 md:flex justify-between items-center md:px-20 max-w-screen-2xl md:mx-auto">
            <header class="flex flex-col items-center gap-2 text-center mb-2 md:text-left md:items-start">
                <h2 class="text-center md:text-left  ">
                    Affordable options<br><span class="!text-primary">for
                        all!</span>
                </h2>
            </header>
            <div class="flex justify-center items-center mt-12 gap-4">
                <p class="max-w-lg text-center md:text-left">It’s never been more affordable to look after your oral health. Our affordable
                    options enable you to
                    save money and avoid large out of pocket expenses</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 items-start justify-between mt-20 gap-y-16 px-5 md:px-20 max-w-screen-2xl md:mx-auto">
            <div class="flex flex-col gap-2 items-start ">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        01</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-health-insurance-6206424.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Private health Insurance Patients</p>
                <p class="text-left">Why pay hundreds on insurance just to be stung with a gap? Our No Gap
                    Policy
                    means you pay nothing
                    out of pocket on Exams, Cleans and X-rays.</p>
            </div>
            <div class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        02</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-patients-3811611.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">No insurance
                    Patients</p>
                <p class="text-left ">Affordable preventative dental care, for about the cost of a cup of coffee per week – Our from $95 check-up and clean package means you receive all your
                    preventative dental care
                    including an Exam, clean and X-rays</p>
            </div>
            <div class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        03</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-pedodontics-3981829.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Child dental
                    Benefits</p>
                <p class="text-left">$1000 in government benefits, bulk billed, over two calendar years, for eligible children aged 2-17. The CDBS covers a wide range of
                    services and promotes good early habits!</p>
            </div>
            <div class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        04</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-strategic-plan-5780211.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Financing
                    Plans</p>
                <p class="text-left">Available for larger treatments, our financing options enable you to split the payment on
                    treatments that can leave a
                    dent in your pocket</p>
            </div>
        </div>
    </section>
    <section id="testimonials" class="bg-white">
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
        <div class="pt-20 md:pt-0 md:pb-20 max-w-screen-2xl mx-auto px-5 md:px-20" id="testimonials-container">
            <?php echo do_shortcode('[reviews-feed feed=3]'); ?>
        </div>

    </section>
    <?php
    get_template_part('components/features/homepage/Social');
    get_template_part('components/features/homepage/Contact');
    ?>

</main><!-- #main -->


<?php
get_footer();
