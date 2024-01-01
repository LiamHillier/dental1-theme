<?php
$phone = file_get_contents('wp-content/themes/dental1/theme/assets/icons/phone-call.svg');
$mail = file_get_contents('wp-content/themes/dental1/theme/assets/icons/mail.svg');
$pin = file_get_contents('wp-content/themes/dental1/theme/assets/icons/map-pin.svg');
$clock = file_get_contents('wp-content/themes/dental1/theme/assets/icons/clock.svg');
$facebook = file_get_contents('wp-content/themes/dental1/theme/assets/icons/facebook.svg');
$instagram = file_get_contents('wp-content/themes/dental1/theme/assets/icons/instagram.svg');
?>

<section id="contact" class="text-center relative bg-gray-100 -mt-1 pt-20 pb-32 md:text-left md:pb-60">
    <div class="max-w-screen-2xl mx-auto md:px-20 lg:grid lg:grid-cols-5 lg:gap-20 ">
        <div class="col-span-3 lg:max-w-xl">
            <header class=" flex flex-col items-center gap-2 text-center mb-2 md:items-start">
                <div class="w-12 h-12">
                    <?php echo file_get_contents('wp-content/themes/dental1/theme/assets/logos/icon.svg'); ?>
                </div>
                <p class="text-primary pre-header">Support</p>
                <h2 class="font-semibold">Get in touch</span></h2>
            </header>
            <p class="px-5 md:pl-0 md:pr-20 mt-6">Whether you have a dental emergency, need to get some advice or just
                want
                to get a
                regular
                check-up, our team of Dentists is here to help. With the convenience of flexible booking times, a brand
                new
                clinic and affordable pricing we know you'll want to make your next appointment at Dental One. Get in
                touch
                with
                us today by calling, emailing or filling in our booking form and we'll book you in to see one of our
                team of
                professional and caring dentists.​<br /><br />Simply fill in your details below and we will contact you
                to
                resolve any queries and to confirm your appointment.</p>
            <div class="grid grid-cols-2 gap-x-4 gap-y-10 px-10 my-10 lg:max-w-xl lg:mx-auto md:pl-0">
                <a href="tel:1300066427" class="contact-link">
                    <span class="text-primary"><?php echo $phone; ?></span>
                    <p class="font-semibold text-lg text-black">Call Us Today</p>
                    <p>13 000 NO GAP (1300 066 427)</p>
                </a>
                <div class="contact-link">
                    <span class="text-primary"><?php echo $clock; ?></span>
                    <p class="font-semibold text-lg text-black">Mon - Friday</p>
                    <p>Office hours</p>
                </div>
                <a href="mailto:info@dental1.com.au" class="contact-link ">
                    <span class="text-primary"><?php echo $mail; ?></span>
                    <p class="font-semibold text-lg text-black">Email Us</p>
                    <p>info@dental1.com.au</p>
                </a>
                <a href="" class="contact-link">
                    <span class="text-primary"><?php echo $pin; ?></span>
                    <p class="font-semibold text-lg text-black">Main headquaters</p>
                    <p>275 Manningham Road Lower Templestowe, VIC 3107</p>
                </a>
            </div>
            <hr class="mx-5" />
            <p class=" font-semibold text-black text-lg mt-8">Stay social with us:</p>
            <div class="flex justify-center items-center my-4 gap-4 md:justify-start">
                <a href="https://www.facebook.com/dentalonecraigieburn/"> <?php echo $facebook; ?></a>
                <a href="https://www.instagram.com/dentalonegroup/"> <?php echo $instagram; ?></a>
            </div>
        </div>

        <div id="basic-contact-form" class="my-10 mx-5 p-7 bg-white rounded-3xl shadow-3xl text-left bg-white shadow-2xl shadow-teal-500/30 lg:col-span-2 md:mx-0 animate__initial animate__animated animate__bounceIn animate__fast">
            <?php echo do_shortcode("[gravityforms id='1' title='false' description='false']"); ?>
        </div>
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