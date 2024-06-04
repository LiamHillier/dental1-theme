/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', () => {


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

    const locationsContainer = document.querySelector('.locations-carousel .embla__viewport');
    const locationsPrevButton = document.querySelector('.locations-carousel .embla__prev');
    const locationsNextButton = document.querySelector('.locations-carousel .embla__next');

    if (locationsContainer) {
        const emblaLocationsApi = EmblaCarousel(locationsContainer, {
            loop: true,
            containScroll: 'trimSnaps',
            align: 'start'
        });

        locationsPrevButton.addEventListener('click', () => emblaLocationsApi.scrollPrev());
        locationsNextButton.addEventListener('click', () => emblaLocationsApi.scrollNext());

        // Autoplay functionality
        let autoplayInterval;
        const autoplay = () => {
            autoplayInterval = setInterval(() => {
                emblaLocationsApi.scrollNext();
            }, 3000); // Adjust the interval as needed
        };

        const stopAutoplay = () => {
            clearInterval(autoplayInterval);
        };

        locationsContainer.addEventListener('mouseenter', stopAutoplay);
        locationsContainer.addEventListener('mouseleave', autoplay);

        autoplay();

        // Handle window resize
        window.addEventListener('resize', () => emblaLocationsApi.reInit());
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
            }, 5000); // Adjust the interval as needed
        };

        const stopHeroAutoplay = () => {
            clearInterval(heroAutoplayInterval);
        };

        heroSlider.addEventListener('mouseenter', stopHeroAutoplay);
        heroSlider.addEventListener('mouseleave', heroAutoplay);

        heroAutoplay();
    }
});

