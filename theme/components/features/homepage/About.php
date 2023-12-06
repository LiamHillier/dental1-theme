<?php
$badge = file_get_contents('wp-content/themes/dental1/theme/assets/icons/smile-badge.svg');
?>
<div id="about" class="text-center relative pb-0">
    <div class="px-5 ">
        <h5 class="mb-2">ABOUT US</h5>
        <h2 class="mb-4">Discover the dental elegance at <span class="text-primary">DentalOne</span></h2>
        <p>At dental1.com.au, we are more than just a dental practice we are your trusted partner in achieving and maintaining a beautiful, healty smile. With over a decade of dedicated service in the field of dentistry, we've been transforming smiles and improving lives. </p>
        <p>Whether you're looking to enhance your smile's beauty or maintain your dental health, DentalOne is here for you. Schedule an appointment with us, and let us help you acheive the smile of your dreams.</p>
        <a href="/book-online" class="button primary mt-6">Book Online</a>
    </div>
    <div class="relative mt-10">
        <div class="w-[90vw] h-auto rounded-full bg-primary absolute h-[90vw] z-0 -left-36 bottom-3"></div>
        <div class="relative z-10">
            <img srcset="/wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1000w.avif 1000w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1200w.avif 1200w, /wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au-1600w.avif 1600w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (min-width: 1201px) 1600px" src="/wp-content/themes/dental1/theme/assets/images/about-dentalone-com-au.png" alt="About Dental One Services - Dental Cleaning" width="1888" height="1258" loading="lazy" class="w-[120vw] -ml-5 max-w-[120vw]" />
            <div class="w-24 h-24 absolute right-16 top-[50%] translate-y-[-50%]">
                <?php echo $badge; ?>
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
</div>