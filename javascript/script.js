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

    document.addEventListener("touchstart", function () { }, true);


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
        const loadingSpinner = document.getElementById('loading-spinner');
        const resultText = document.getElementById('result-text');
        const locationsContainer = document.querySelector('.locations-carousel .embla__viewport');
        const locationsPrevButton = document.querySelector('.locations-carousel .embla__prev');
        const locationsNextButton = document.querySelector('.locations-carousel .embla__next');
        const addressForm = document.getElementById('address-form');
        const addressInput = document.getElementById('address-input');

        function displayError(message) {
            loadingSpinner.classList.add('hidden');
            resultText.classList.remove('hidden');
            resultText.innerText = message;
        }

        if (!locationsContainer || !addressForm || !addressInput) {
            displayError('Initialization error. Please try again later.');
            return;
        }

        try {
            addressForm.addEventListener('submit', function (event) {
                event.preventDefault();
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

            window.addEventListener('resize', () => emblaLocationsApi.reInit());

            async function findClosestClinic() {
                const address = addressInput.value;
                loadingSpinner.classList.remove('hidden');
                resultText.classList.add('hidden');

                try {
                    const userLocation = await geocodeAddress(address);
                    const dentalClinics = getDentalClinics();

                    const distances = await getDistanceMatrix(userLocation, dentalClinics.map(clinic => clinic.address));
                    const closestClinic = findClosest(distances, dentalClinics);

                    if (closestClinic) {
                        const index = dentalClinics.indexOf(closestClinic);
                        emblaLocationsApi.scrollTo(index);
                        loadingSpinner.classList.add('hidden');
                        resultText.classList.remove('hidden');
                        resultText.innerText = `Your closest clinic is located at ${closestClinic.address}. Distance: ${closestClinic.distanceText}`;
                    } else {
                        displayError('No clinics found. Please try again later.');
                    }
                } catch (error) {
                    displayError('Unable to get location information at the moment. Please try again later.');
                }
            }

            function geocodeAddress(address) {
                return new Promise((resolve, reject) => {
                    const geocoder = new google.maps.Geocoder();
                    geocoder.geocode({ 'address': address }, function (results, status) {
                        if (status === 'OK') {
                            resolve(results[0].geometry.location);
                        } else {
                            reject(status);
                        }
                    });
                });
            }

            function getDistanceMatrix(origin, destinations) {
                return new Promise((resolve, reject) => {
                    const service = new google.maps.DistanceMatrixService();
                    service.getDistanceMatrix({
                        origins: [origin],
                        destinations: destinations,
                        travelMode: 'DRIVING',
                    }, function (response, status) {
                        if (status === 'OK') {
                            resolve(response.rows[0].elements);
                        } else {
                            reject(status);
                        }
                    });
                });
            }

            function getDentalClinics() {
                const slides = document.querySelectorAll('.locations-carousel .embla__slide');
                return Array.from(slides).map(slide => ({
                    address: slide.getAttribute('data-address'),
                    element: slide
                }));
            }

            function findClosest(distanceMatrixResult, clinics) {
                let closestClinic = null;
                let minDistance = Infinity;

                distanceMatrixResult.forEach((element, index) => {
                    if (element.status === 'OK' && element.distance.value < minDistance) {
                        minDistance = element.distance.value;
                        closestClinic = clinics[index];
                        closestClinic.distanceText = element.distance.text;
                    }
                });

                return closestClinic;
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

