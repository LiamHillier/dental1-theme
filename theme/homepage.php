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
        <section class="bg-gray-100 pt-8 pb-8 max-w-screen-2xl mx-auto px-5 md:px-20 ">
            <div class="  bg-primary rounded-3xl text-white px-10 py-10 grid md:grid-cols-2">
                <div class="flex flex-col gap-2 items-center md:items-start">
                    <h2 class="text-center md:text-left">
                        Do you need urgent care?
                    </h2>
                    <h2>
                        <a href="tel:1300066427" class="underline">1300 066 427</a>
                    </h2>
                    <a href="/dental-emergencies/" class="outline button mt-4 text-center md:text-left">Learn more</a>

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
    <section id="services" class="bg-gray-100 pt-10 md:pt-0 pb-36 md:pb-40 relative">
        <div class="px-5 md:flex justify-between items-center md:px-20 max-w-screen-2xl md:mx-auto">
            <header class="flex flex-col items-center gap-2 text-center mb-2 md:text-left md:items-start">
                <h2 class="text-center md:text-left  ">
                    Affordable options<br><span class="!text-primary">for
                        all!</span>
                </h2>
            </header>
            <div class="flex justify-center items-center mt-12 gap-4">
                <p class="max-w-lg text-center md:text-left">It’s never been more affordable to look after your oral health. Our affordable options enable you to save money and avoid large out of pocket expenses
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 items-start justify-between mt-20 gap-y-16 px-5 md:px-20 max-w-screen-2xl md:mx-auto">
            <a href="/no-gap" class="flex flex-col gap-2 items-center ">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        01</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-health-insurance-6206424.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-center text-lg font-semibold underline">Private Health Insurance Patients</p>
                <p class="text-center">Why pay hundreds on insurance just to be stung with a gap? Our No Gap Policy means you pay nothing out of pocket on Exams, Cleans and X-rays.
                </p>
            </a>
            <a href="/no-gap" class="flex flex-col gap-2 items-center">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        02</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-patients-3811611.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-center text-lg font-semibold underline">No Insurance
                    Patients</p>
                <p class="text-center ">Affordable preventative dental care, for about the cost of a cup of coffee per week – Our from $119 check-up and clean package means you receive all your preventative dental care including an Exam, clean and X-rays
                </p>
            </a>
            <a href="/child-dental-benefits-scheme/" class="flex flex-col gap-2 items-center">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        03</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-pedodontics-3981829.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-center text-lg font-semibold underline">Child Dental
                    Benefits</p>
                <p class="text-center">$1095 in government benefits, bulk billed, over two calendar years, for eligible children aged 2-17. The CDBS covers a wide range of services and promotes good early habits!
                </p>
            </a>
            <a href="/payment-options/" class="flex flex-col gap-2 items-center">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">
                        04</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-strategic-plan-5780211.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-center text-lg font-semibold underline">Payment Options</p>
                <p class="text-center">Available for larger treatments, our financing options enable you to split the payment on treatments that can leave a dent in your pocket
                </p>
            </a>
        </div>
        <div class="locations-divider-2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="w-full h-[20px] left-0 absolute bottom-0 bg-gray-50"></div>
        <div class="locations-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

</main><!-- #main -->


<?php
get_footer();
