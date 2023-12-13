<div id="services" class="text-center relative bg-white -mt-1 py-20">
    <div class="px-5 ">
        <h5 class="mb-2 text-primary">Our services</h5>
        <h2 class="mb-4">Personalized, Comprehensive <span class="text-primary">Treatment</span></h2>
        <p>At dental1.com.au, we are more than just a dental practice we are your trusted partner in achieving and maintaining a beautiful, healty smile. With over a decade of dedicated service in the field of dentistry, we've been transforming smiles and improving lives. </p>
        <a href="/book-online" class="link mt-6">View services <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
    <div class="styled-select-container mt-6">
        <p class="mb-3 uppercase leading-widest text-base text-black">Select a sevice</p>
        <div id="styled-select">
            <span id="select-text"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white w-6 h-6">
                <polyline points="6 9 12 15 18 9" />
            </svg>
        </div>
        <div class="styled-select-content" id="select-content">
            <a href="#" id="childrens-dentistry">
                <?php get_template_part('components/features/homepage/services/dropdowns/ChildrensDentistry'); ?>
            </a>
            <a href="#" id="cosmetic-dentistry">
                <?php get_template_part('components/features/homepage/services/dropdowns/CosmeticDentistry'); ?>
            </a>
        </div>
    </div>
    <div class="service-content px-5 mt-8">
        <?php get_template_part('components/features/homepage/services/content/ChildrensDentistry'); ?>
        <?php get_template_part('components/features/homepage/services/content/CosmeticDentistry'); ?>
    </div>
    <div class="service-shape-divider-bottom-1 absolute bottom-6 left-0">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="w-full h-[26px] bg-gray-200 absolute bottom-0 bg-gray-50"></div>
    <div class="service-shape-divider-bottom-2 absolute -bottom-0 left-0">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</div>