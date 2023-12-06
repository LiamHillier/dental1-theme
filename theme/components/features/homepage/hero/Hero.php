<?php
$circle = file_get_contents('wp-content/themes/dental1/theme/assets/icons/circle.svg');
$doubledash = file_get_contents('wp-content/themes/dental1/theme/assets/icons/double-dash.svg');
?>

<div id="hero" class="bg-background relative pt-32 flex flex-col justify-between items-center gap-10 px-5">
    <div class="absolute inset-0 flex justify-center items-center top-72 md:top-0">
        <img alt="dental 1 smiling women after dental care" class="w-full h-[700px] md:h-screen object-cover object-top z-0" srcset="/wp-content/themes/dental1/theme/assets/images/hero/hero-390w.avif 390w, /wp-content/themes/dental1/theme/assets/images/hero/hero-400w.avif 400w, /wp-content/themes/dental1/theme/assets/images/hero/hero-600w.avif 600w, /wp-content/themes/dental1/theme/assets/images/hero/hero-800w.avif 800w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1000w.avif 1000w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1200w.avif 1200w, /wp-content/themes/dental1/theme/assets/images/hero/hero-1600w.avif 1600w" sizes="(max-width: 390px) 390px, (max-width: 400px) 400px, (max-width: 600px) 600px, (max-width: 800px) 800px, (max-width: 1000px) 1000px, (max-width: 1200px) 1200px, (min-width: 1201px) 1600px" src="/wp-content/themes/dental1/theme/assets/images/hero/hero.png" />
    </div>
    <div class="text-center flex flex-col gap-2 items-center relative z-10">
        <h1 class="font-accent text-4xl">Welcome to Dental<span class="text-primary">One</span></h1>
        <h2 class="font-secondary text-7xl ">Unleash</h2>
    </div>
    <div class="text-center flex flex-col gap-2 items-center relative z-10">
        <div class="w-[70%]">
            <?php echo $circle; ?>
        </div>
        <h2 class="text-white font-secondary absolute top-[50%] -translate-y-[70%] text-4xl">your</h2>
    </div>
    <div class="text-center flex flex-col items-center relative z-10 font-secondary">
        <div class="flex">
            <h2 class="text-7xl">Smile</h2><img src="/wp-content/themes/dental1/theme/assets/images/arrow-scribble.png" alt="dental 1 smiling women after dental care" width="202" height="135" class="-ml-2 w-20 self-end pt-10" />
        </div>
        <div class="flex gap-0">
            <div class="w-4/12"><?php echo $doubledash; ?></div>
            <h2 class="text-5xl text-primary -mt-4">Beauty</h2>
        </div>
    </div>
</div>
<div id="container">
    <div id="circle">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
            <defs>
                <path id="circlePath" d="M 100, 100 m -30, 0 a 30,30 0 0,1 60,0 a 30,30 0 0,1 -60,0 " />
            </defs>
            <circle cx="100" cy="67" r="30" fill="none" />
            <g>
                <use xlink:href="#circlePath" fill="none" />
                <text fill="#000" letter-spacing="1" font-size="8" y="65">
                    <textPath xlink:href="#circlePath" startOffset="0%">SCROLL DOWN</textPath>
                </text>
                <circle cx="130" cy="85" r="3" fill="#000" />
                <text fill="#000" letter-spacing="1" font-size="8" y="65">
                    <textPath xlink:href="#circlePath" startOffset="50%">SCROLL DOWN</textPath>
                </text>
                <circle cx="70" cy="115" r="3" fill="#08A39A" />
            </g>
        </svg>
    </div>
</div>