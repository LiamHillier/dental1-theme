<?php
$badge = file_get_contents('wp-content/themes/dental1/theme/assets/icons/smile-badge.svg');
?>
<section id="about" class="text-center relative pt-20 md:pt-0 pb-0 md:!mt-[100px] bg-gray-100">
    <div class="max-w-screen-2xl mx-auto relative">
        <div class="bg-primary rounded-full w-[65vw] h-[65vw] absolute bottom-2 -left-52 md:max-w-[900px]  md:max-h-[900px]">
        </div>
        <header class="px-5 md:absolute md:right-20 md:w-4/12 md:text-left md:top-1/2 md:-translate-y-1/2 md:z-20 md:pb-20 ">
            <p class="mb-2 pre-header animate__initial animate__animated animate__fadeInUp">ABOUT US</p>
            <h2 class="mb-4 font-semibold animate__initial  animate__animated animate__fadeInUp">Discover the dental
                elegance at <span class="text-primary">DentalOne</span>
            </h2>
            <p class="animate__initial animate__animated animate__fadeInUp">At dental1.com.au, we are more than just a
                dental practice we
                are your trusted partner in achieving and
                maintaining a beautiful, healty smile. With over a decade of dedicated service in the field of
                dentistry,
                we've been transforming smiles and improving lives. </p><br />
            <p class="animate__initial animate__animated animate__fadeInUp">Whether you're looking to enhance your
                smile's beauty or
                maintain your dental health, DentalOne is here
                for
                you. Schedule an appointment with us, and let us help you acheive the smile of your dreams.</p>
            <a href="/book-online" class="button primary mt-6 animate__initial animate__animated animate__fadeInUp">Book
                Online</a>
        </header>
        <div class="relative">
            <div class="relative z-10">
                <img srcset="/wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1000w.avif 1000w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1200w.avif 1200w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1600w.avif 1600w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (min-width: 1201px) 1600px" src="/wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au.png" alt="About Dental One Services - Dental Cleaning" width="1888" height="1258" loading="lazy" class="w-[120vw] -ml-5 max-w-[120vw] md:-ml-16  md:max-w-[1368px]" />
                <div class="w-24 h-24 md:w-[16vw] md:h-[16vw] md:max-w-[170px] absolute right-16 md:left-[200px] lg:left-[400px] top-[50%] translate-y-[-50%] animate__animated animate__bounceIn animate__slow">
                    <?php echo $badge; ?>
                </div>
            </div>
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
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>