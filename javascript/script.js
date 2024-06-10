/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * 
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', () => {

    // Select the elements
    const menuOpen = document.querySelector('.mobile-hamburger');
    const menuClose = document.querySelector('.menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');

    // Function to open the mobile menu
    function openMenu() {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('flex');
    }

    // Function to close the mobile menu
    function closeMenu() {
        mobileMenu.classList.remove('flex');
        mobileMenu.classList.add('hidden');
    }

    // Event listeners
    menuOpen.addEventListener('click', openMenu);
    menuClose.addEventListener('click', closeMenu);

    const megaMenuLinks = document.querySelectorAll('.mega-menu-link');
    const header = document.getElementById('masthead');

    function checkAriaExpanded() {
        let shouldBeWhite = false;
        megaMenuLinks.forEach(link => {
            if (link.getAttribute('aria-expanded') === 'true') {
                shouldBeWhite = true;
            }
        });
        if (shouldBeWhite) {
            header.classList.add('bg-white');
        } else {
            header.classList.remove('bg-white');
        }
    }

    // Create an observer to watch for changes to the aria-expanded attribute
    const observerLink = new MutationObserver(checkAriaExpanded);

    // Start observing each megaMenuLink for attribute changes
    megaMenuLinks.forEach(link => {
        observerLink.observe(link, { attributes: true, attributeFilter: ['aria-expanded'] });
    });

    // Initial check on page load
    checkAriaExpanded();



    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('animate__initial');
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    document.querySelectorAll('.animate__animated').forEach(element => {
        observer.observe(element);
    });


    
    function initMap() {
        function displayError(message) {
            const loadingSpinner = document.getElementById('loading-spinner');
            const resultText = document.getElementById('result-text');
    
            loadingSpinner.classList.add('hidden');
            resultText.classList.remove('hidden');
            resultText.innerText = message;
        }
    
        try {
            const locationsContainer = document.querySelector('.locations-carousel .embla__viewport');
            const locationsPrevButton = document.querySelector('.locations-carousel .embla__prev');
            const locationsNextButton = document.querySelector('.locations-carousel .embla__next');
    
            if (locationsContainer) {
                // Initialize address autocomplete
                const addressInput = document.getElementById('address-input');
                const autocomplete = new google.maps.places.Autocomplete(addressInput);
    
                autocomplete.addListener('place_changed', () => {
                    const place = autocomplete.getPlace();
                    if (!place.geometry) {
                        // User entered the name of a Place that was not suggested and pressed the Enter key, or the Place Details request failed.
                        displayError('No details available for input: \'' + place.name + '\'');
                        return;
                    }
                });
    
                document.getElementById('address-form').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent page reload
                    findClosestClinic();
                });
    
                const emblaLocationsApi = EmblaCarousel(locationsContainer, {
                    loop: false,
                    align: 'start'
                });
    
                if (locationsPrevButton) {
                    locationsPrevButton.addEventListener('click', () => emblaLocationsApi.scrollPrev());
                }
    
                if (locationsNextButton) {
                    locationsNextButton.addEventListener('click', () => emblaLocationsApi.scrollNext());
                }
    
                // Handle window resize
                window.addEventListener('resize', () => emblaLocationsApi.reInit());
    
                function findClosestClinic() {
                    const addressInputValue = addressInput.value;
                    const loadingSpinner = document.getElementById('loading-spinner');
                    const resultText = document.getElementById('result-text');
    
                    // Show loading spinner
                    loadingSpinner.classList.remove('hidden');
                    resultText.classList.add('hidden');
    
                    // Geocode the user's address
                    const geocoder = new google.maps.Geocoder();
                    geocoder.geocode({ 'address': addressInputValue }, function (results, status) {
                        if (status == 'OK') {
                            const userLocation = results[0].geometry.location;
    
                            // Calculate distances to each clinic
                            const slides = document.querySelectorAll('.locations-carousel .embla__slide');
                            const dentalClinics = Array.from(slides).map(slide => ({
                                address: slide.getAttribute('data-address'),
                                element: slide
                            }));
    
                            let closestClinic = null;
                            let minDistance = Infinity;
                            const service = new google.maps.DistanceMatrixService();
    
                            service.getDistanceMatrix({
                                origins: [userLocation],
                                destinations: dentalClinics.map(clinic => clinic.address),
                                travelMode: 'DRIVING',
                            }, function (response, status) {
                                if (status == 'OK') {
                                    const distances = response.rows[0].elements;
                                    distances.forEach((element, index) => {
                                        if (element.distance.value < minDistance) {
                                            minDistance = element.distance.value;
                                            closestClinic = dentalClinics[index];
                                        }
                                    });
    
                                    // Set the closest clinic as the active slide
                                    const index = dentalClinics.indexOf(closestClinic);
                                    emblaLocationsApi.scrollTo(index);
    
                                    // Display result
                                    loadingSpinner.classList.add('hidden');
                                    resultText.classList.remove('hidden');
                                    resultText.innerText = `The closest clinic is located at ${closestClinic.address}. Distance: ${distances[index].distance.text}`;
                                } else {
                                    // Handle distance matrix error
                                    displayError('Unable to get location information at the moment. Please try again later.');
                                }
                            });
                        } else {
                            // Handle geocode error
                            displayError('Unable to get location information at the moment. Please try again later.');
                        }
                    });
                }
            }
        } catch (error) {
            displayError('Unable to initialize Google Maps API. Please try again later.');
        }
    }
    initMap();
    
    

    const teamsContainer = document.querySelector('#team .team__viewport');
    const teamPrevButton = document.querySelector('.team__prev');
    const teamNextButton = document.querySelector('.team__next');

    if (teamsContainer) {
        const emblaTeamsApi = EmblaCarousel(teamsContainer, {
            loop: false,
            align: 'start'
        });

        teamPrevButton.addEventListener('click', () => emblaTeamsApi.scrollPrev());
        teamNextButton.addEventListener('click', () => emblaTeamsApi.scrollNext());

        // Autoplay functionality
        let autoplayInterval;
        const autoplay = () => {
            autoplayInterval = setInterval(() => {
                emblaTeamsApi.scrollNext();
            }, 7000); // Adjust the interval as needed
        };

        const stopAutoplay = () => {
            clearInterval(autoplayInterval);
        };

        teamsContainer.addEventListener('mouseenter', stopAutoplay);
        teamsContainer.addEventListener('mouseleave', autoplay);

        autoplay();

        // Handle window resize
        window.addEventListener('resize', () => emblaTeamsApi.reInit());
    }

    window.addEventListener('scroll', () => {
        const header = document.getElementById('masthead');
        const addClass = window.scrollY > 50;
        header.classList.toggle('bg-white', addClass);
        header.classList.toggle('bg-transparent', !addClass);
    });

    const heroSlider = document.querySelector('.hero');

    if (heroSlider) {
        const emblaApi = EmblaCarousel(heroSlider, { loop: true }); // Enable loop for continuous autoplay
        const dotsContainer = document.querySelector('.embla__dots');

        const setupDots = () => {
            const slides = emblaApi.slideNodes();
            const dotsFragment = document.createDocumentFragment();

            slides.forEach((slide, index) => {
                const dot = document.createElement('button');
                dot.className = 'embla__dot';
                dot.innerHTML = `
                    <span class="slide-number">0${index + 1}</span>
                    <div class="dot-inner"></div>
                    <div class="dot-line"></div>
                `;

                dot.addEventListener('click', () => emblaApi.scrollTo(index));
                dotsFragment.appendChild(dot);
            });

            dotsContainer.appendChild(dotsFragment);
            updateDots();
        };

        const updateDots = () => {
            const dots = dotsContainer.querySelectorAll('.embla__dot');
            const selectedIndex = emblaApi.selectedScrollSnap();

            dots.forEach((dot, index) => {
                const isActive = index === selectedIndex;
                dot.classList.toggle('is-active', isActive);
                dot.querySelector('.slide-number').style.display = isActive ? 'inline-block' : 'none';
                dot.querySelector('.dot-line').style.display = isActive ? 'block' : 'none';
            });
        };

        emblaApi.on('select', updateDots);
        setupDots();

        // Autoplay functionality
        let heroAutoplayInterval;
        const heroAutoplay = () => {
            heroAutoplayInterval = setInterval(() => {
                emblaApi.scrollNext();
            }, 10000); // Adjust the interval as needed
        };

        const stopHeroAutoplay = () => {
            clearInterval(heroAutoplayInterval);
        };

        heroSlider.addEventListener('mouseenter', stopHeroAutoplay);
        heroSlider.addEventListener('mouseleave', heroAutoplay);

        heroAutoplay();
    }
});

