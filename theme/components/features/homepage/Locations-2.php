<section id="locations" class=" bg-gray-100 pt-10 md:pt-0 pb-36 relative -mb-1">
    <div class="">
        <div class="md:flex justify-between items-center md:flex-wrap md:gap-10 max-w-screen-2xl  mx-auto px-5 md:px-20 relative">
            <div>
                <header class="flex flex-col items-center gap-2 text-center mb-2 ">
                    <h2 class="animate__initial animate__animated animate__fadeInUp">Our clinics across
                        <br><span class="!text-primary">Melbourne</span>
                    </h2>
                </header>
                <div class="flex flex-col items-center gap-2 locations-description">
                    <p class="text-center animate__initial animate__animated animate__fadeInUp">At Dental<span class="text-primary">One</span>, we
                        are
                        more than just a dental practice; we are your
                        trusted
                        partner
                        in achieving and maintaining a beautiful, healthy smile.</p>
                    <a href="/locations" class="link mt-4 animate__initial animate__animated animate__fadeInUp animate__delay-1s">
                        View all locations
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="hidden md:block md:w-full lg:w-4/12">
                <p class="text-primary uppercase mb-4">Find the clinic nearest to you</p>
                <div class="relative">
                    <form id="address-form">
                        <input id="address-input" type="text" class="outline-primary !ring-primary rounded-lg shadow-lg px-4 py-4 w-full text-sm" placeholder="Enter your address" />
                    </form>

                    <div class="bg-primary text-white rounded-lg p-2 absolute right-4 top-[50%] translate-y-[-50%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div>
                </div>
                <div id="loading-spinner" class="hidden absolute top-4 right-4">
                    <svg class="animate-spin h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291a7.964 7.964 0 01-2-5.291H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                <p id="result-text" class="mt-4 text-primary hidden"></p>
            </div>
        </div>

        <!-- Locations carousel -->
        <section id="locations-carousel" class="embla relative locations-carousel max-w-screen-2xl mx-auto md:px-20 mt-4">
            
                <button class="embla__prev absolute left-2 top-[50%] z-10 bg-primary text-white rounded-full p-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M20.25 12a.75.75 0 01-.75.75H6.31l5.47 5.47a.75.75 0 11-1.06 1.06l-6.75-6.75a.75.75 0 010-1.06l6.75-6.75a.75.75 0 111.06 1.06l-5.47 5.47H19.5a.75.75 0 01.75.75z" clip-rule="evenodd" />
                    </svg>
                </button> 
                <button class="embla__next absolute right-2 top-[50%] z-10 bg-primary text-white rounded-full p-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>
                </button>
         
            <div class="embla__viewport">

                <div class="embla__container">
                    <?php
                    $locations = new WP_Query(array(
                        'post_type' => 'location',
                        'posts_per_page' => -1
                    ));

                    if ($locations->have_posts()) :
                        while ($locations->have_posts()) : $locations->the_post();
                            $phone = get_field('phone');
                            $email = get_field('email');
                            $address = get_field('address');
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                            <div class="embla__slide" data-address="<?php echo esc_html($address); ?>">
                                <a href="<?php echo esc_url('/locations/' . sanitize_title(get_the_title())); ?>" >
                                <div class="location-card">
                                    <?php if ($image) : ?>
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                    <div class="location-content h-full flex flex-col justify-between">
                                        <div class="flex flex-col gap-1">
                                            <h3><?php the_title(); ?></h3>
                                            <p>
                                                <strong>Phone:</strong>
                                                <a href="tel:<?php echo esc_attr($phone); ?>">
                                                    <?php echo esc_html($phone); ?>
                                                </a>
                                            </p>
                                            <p>
                                                <strong>Email:</strong>
                                                <a href="mailto:<?php echo esc_attr($email); ?>">
                                                    <?php echo esc_html($email); ?>
                                                </a>
                                            </p>
                                            <p>
                                                <strong>Address:</strong>
                                                <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo urlencode($address); ?>" target="_blank">
                                                    <?php echo esc_html($address); ?>
                                                </a>
                                            </p>
                                        </div>
                                        <a href="<?php echo esc_url('/locations/' . sanitize_title(get_the_title())); ?>" class="button primary w-full rounded mt-4 book-icon justify-center">
                                            <?php echo esc_html('Book Online'); ?>
                                        </a>
                                    </div>

                                </div>
                                </a>
                               
                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

        </section>

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