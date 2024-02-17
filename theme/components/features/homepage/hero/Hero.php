<?php
$circle = file_get_contents('wp-content/themes/dental1/theme/assets/icons/circle.svg');
$doubledash = file_get_contents('wp-content/themes/dental1/theme/assets/icons/double-dash.svg');
?>

<div class="embla relative">
    <div class="embla__container max-h-[1000px] ">
        <div class="embla__slide">
            <div class="relative flex flex-col justify-center items-start gap-10 h-full  overflow-hidden pb-40">
                <div class="bg-gradient-to-t from-transparent to-white h-[180px] w-full absolute top-0 left-0 z-10"></div>
                <img  srcset="/wp-content/themes/dental1/theme/assets/images/hero/hero-1-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1-1000w.avif 1000w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1-1200w.avif 1200w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1-1600w.avif 1600w"
  sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (min-width: 1201px) 1600px"
  src="/wp-content/themes/dental1/theme/assets/images/hero/hero-1.jpg"
  alt="Dental One Hero"
  width="1708"
  height="1132" class=" object-cover absolute top-0 left-0 w-full h-full" />
                <div class="relative z-20 w-full max-w-screen-2xl mx-auto py-4 px-5 md:px-20">
                    <h1 class="hero-text-large font-black text-primary text-center md:text-left">The Smile<br/> You Deserve</h1>
                    <p class="text-black max-w-lg pl-2 mt-2 text-xl mx-auto md:ml-0 text-center md:text-left">Experience dental excellence where your comfort and health are our top priorities. With state-of-the-art technology and compassionate care to provide you with unparalleled dental services.</p>
                    <div class="flex gap-4 items-center mt-6 justify-center md:justify-start">
                    <a href="/services" class="button primary">book appointment</a>
                    <a href="/services" class="button alt">our services</a>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="embla__slide">
            <div id="hero" class="bg-background relative flex flex-col justify-between items-center gap-10 h-full">
                <img alt="dental 1 smiling women after dental care" class="mt-32 inset-0 flex justify-center items-center h-full w-full object-cover object-top z-0 min-h-[700px] md:mt-0 md:max-h-[1200px] md:w-auto" srcset="/wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-1000w.avif 1000w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-1200w.avif 1200w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-1600w.avif 1600w, /wp-content/themes/dental1/theme/assets/images/hero/banner-image-1-(1)-2000w.avif 2000w" sizes="(max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (max-width: 1600px) 1600px, (min-width: 1601px) 2000px" src="/wp-content/themes/dental1/theme/assets/images/hero/banner-image 1 (1).png" alt="lady smiling after dental appointment at dental1" />
                <div class="absolute top-[50%] translate-y-[-50%] px-5 flex flex-col md:flex-row md:justify-between w-full md:px-20 md:-mt-20 gap-16 md:gap-24 max-w-screen-2xl mx-auto">
                    <div class="text-center md:text-left flex flex-col gap-2 items-center md:items-start relative z-10 lg:-mt-20 md:w-4/12 ">
                        <h1 class="font-accent hero-text-medium animate__animated animate__fadeInUp">Welcome to Dental<span class="text-primary">One</span></h1>
                        <h2 class="font-secondary hero-text-large capitalize text-neutral-800  animate__animated animate__fadeInUp">
                            Unleash</h2>
                        <p class="hidden md:block max-w-md text-black my-8 animate__animated animate__fadeIn animate__slow">
                            Lorem ipsum dolor,
                            sit
                            amet consectetur
                            adipisicing
                            elit.
                            Quisquam quia
                            vero rem
                            ullam accusantium cumque itaque magni rerum repellat corporis ea neque blanditiis, inventore eveniet
                            ipsum pariatur possimus amet ratione.</p>
                        <a href="/about" class="link mt-6 animate__animated animate__fadeInUp animate__delay-1s">More About Us <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg></a>

                    </div>
                    <div class="text-center flex flex-col gap-2 items-center relative z-10 md:w-[200px] h-[200px] md:mt-20 animate__animated animate__bounceIn animate__slow">
                        <div class="w-[200px] h-[200px]">
                            <?php echo $circle; ?>
                        </div>
                        <h2 class="text-white font-secondary absolute top-[50%] translate-y-[-50%] text-4xl lowercase pb-3">your
                        </h2>
                    </div>
                    <div class="text-center flex flex-col items-center md:items-end relative z-10 font-secondary  md:mt-40 md:w-4/12">
                        <div class="flex">
                            <h2 class="animate__animated animate__fadeInUp hero-text-large capitalize text-neutral-800">
                                Smile</h2>
                            <img src="/wp-content/themes/dental1/theme/assets/images/arrow-scribble.png" alt="dental 1 smiling women after dental care" width="202" height="135" class="-ml-2 w-20 self-end pt-10" />
                        </div>
                        <div class="flex gap-0 items-center">
                            <div class="w-4/12 animate__animated animate__lightSpeedInLeft animate__delay-1s">
                                <?php echo $doubledash; ?></div>
                            <h2 class="hero-text-medium text-primary  capitalize animate__animated animate__fadeInUp">Beauty</h2>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-t from-gray-200 to-transparent h-[100px] w-full absolute bottom-0 left-0"></div>
            </div>
        </div>
        <div class="embla__slide">Slide 3</div>
    </div>
    <div class="embla__dots"></div>
    <div class="service-shape-divider-bottom-1 absolute bottom-6 left-0 ">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
        </svg>
    </div>
    <div class="w-full h-[26px]  absolute bottom-0 bg-gray-50"></div>
    <div class="service-shape-divider-bottom-2 absolute -bottom-0 left-0">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-100"></path>
        </svg>
    </div>
</div>



<div id="container" class="-mt-[300px]">
    <div id="circle" class="animate__initial animate__animated animate__fadeInUp animate__slow">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
            <defs>
                <path id="circlePath" d="M 100, 100 m -30, 0 a 30,30 0 0,1 60,0 a 30,30 0 0,1 -60,0 " />
            </defs>
            <circle cx="100" cy="67" r="30" fill="none" />
            <g>
                <use xlink:href="#circlePath" fill="none" />
                <text fill="#08A39A" letter-spacing="1" font-size="8" y="65">
                    <textPath xlink:href="#circlePath" startOffset="0%">SCROLL DOWN</textPath>
                </text>
                <circle cx="130" cy="85" r="3" fill="#fff" />
                <text fill="#fff" letter-spacing="1" font-size="8" y="65">
                    <textPath xlink:href="#circlePath" startOffset="50%">SCROLL DOWN</textPath>
                </text>
                <circle cx="70" cy="115" r="3" fill="#08A39A" />
            </g>
        </svg>
    </div>
</div>