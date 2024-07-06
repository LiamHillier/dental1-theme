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


	document.addEventListener('touchstart', () => { }, true);

	const menuOpen = document.querySelector('.mobile-hamburger');
	const menuClose = document.querySelector('.menu-close');
	const mobileMenu = document.querySelector('.mobile-menu');

	const header = document.getElementById('masthead');

	const locationsCarousel = {
		container: document.querySelector(
			'.locations-carousel .embla__viewport'
		),
		prevButton: document.querySelector('.locations-carousel .embla__prev'),
		nextButton: document.querySelector('.locations-carousel .embla__next'),
	};

	const teamsCarousel = {
		container: document.querySelector('#team .team__viewport'),
		prevButton: document.querySelector('.team__prev'),
		nextButton: document.querySelector('.team__next'),
	};

	const heroSlider = document.querySelector('.hero');

	function toggleMenu(open) {
		if (open) {
			mobileMenu.classList.remove('hidden');
			mobileMenu.classList.add('flex');
		} else {
			mobileMenu.classList.remove('flex');
			mobileMenu.classList.add('hidden');
		}
	}

	menuOpen.addEventListener('click', () => toggleMenu(true));
	menuClose.addEventListener('click', () => toggleMenu(false));

	window.addEventListener('scroll', () => {
		const addClass = window.scrollY > 50;
		header.classList.toggle('bg-white', addClass);
		header.classList.toggle('bg-transparent', !addClass);
	});

	function displayError(message) {
		const loadingSpinner = document.getElementById('loading-spinner');
		const resultText = document.getElementById('result-text');
		loadingSpinner.classList.add('hidden');
		resultText.classList.remove('hidden');
		resultText.innerText = message;
	}

	async function initMap() {
		const addressForm = document.getElementById('address-form');
		const addressInput = document.getElementById('address-input');
		const loadingSpinner = document.getElementById('loading-spinner');
		const resultText = document.getElementById('result-text');

		if (
			!locationsCarousel.container ||
			!addressForm ||
			!addressInput ||
			!loadingSpinner ||
			!resultText
		) {
			displayError('Initialization error. Please try again later.');
			return;
		}

		let emblaLocationsApi;

		function initializeCarousel() {
			emblaLocationsApi = EmblaCarousel(locationsCarousel.container, {
				loop: false,
				align: 'start',
			});

			if (locationsCarousel.prevButton && locationsCarousel.nextButton) {
				locationsCarousel.prevButton.addEventListener('click', () =>
					emblaLocationsApi.scrollPrev()
				);

				locationsCarousel.nextButton.addEventListener('click', () =>
					emblaLocationsApi.scrollNext()
				);
			}
		}

		addressForm.addEventListener('submit', async (event) => {
			event.preventDefault();
			loadingSpinner.classList.remove('hidden');
			resultText.classList.add('hidden');

			try {
				const address = addressInput.value;
				const userLocation = await geocodeAddress(address);
				const dentalClinics = getDentalClinics();

				const distances = await getDistanceMatrix(
					userLocation,
					dentalClinics.map((clinic) => clinic.address)
				);

				const closestClinic = findClosest(distances, dentalClinics);

				if (closestClinic) {
					const index = dentalClinics.indexOf(closestClinic);
					emblaLocationsApi.scrollTo(index);
					resultText.innerText = `Your closest clinic is located at ${closestClinic.address}. Distance: ${closestClinic.distanceText}`;
				} else {
					displayError('No clinics found. Please try again later.');
				}
			} catch (error) {
				displayError(
					'Unable to get location information at the moment. Please try again later.'
				);
			} finally {
				loadingSpinner.classList.add('hidden');
				resultText.classList.remove('hidden');
			}
		});

		initializeCarousel();
	}

	function geocodeAddress(address) {
		return new Promise((resolve, reject) => {
			const geocoder = new google.maps.Geocoder();
			geocoder.geocode({ address: address }, (results, status) => {
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
			service.getDistanceMatrix(
				{
					origins: [origin],
					destinations: destinations,
					travelMode: 'DRIVING',
				},
				(response, status) => {
					if (status === 'OK') {
						resolve(response.rows[0].elements);
					} else {
						reject(status);
					}
				}
			);
		});
	}

	// Example function, ensure it fits your specific implementation
	function getDentalClinics() {
		const slides = document.querySelectorAll(
			'.locations-carousel .embla__slide'
		);
		return Array.from(slides).map((slide) => ({
			address: slide.getAttribute('data-address'),
			element: slide,
		}));
	}

	function findClosest(distanceMatrixResult, clinics) {
		let closestClinic = null;
		let minDistance = Infinity;

		distanceMatrixResult.forEach((element, index) => {
			if (
				element.status === 'OK' &&
				element.distance.value < minDistance
			) {
				minDistance = element.distance.value;
				closestClinic = clinics[index];
				closestClinic.distanceText = element.distance.text;
			}
		});

		return closestClinic;
	}

	if (locationsCarousel) {
		initMap();

		document.querySelectorAll('.book-now-location').forEach(function (button) {
			button.addEventListener('click', function (e) {
				e.preventDefault();
				const parentSlide = button.closest('.embla__slide');
				const iframeSrc = parentSlide.dataset.bookingIframe;
				const iframe = document.createElement('iframe');
				iframe.id = 'core-widget';
				iframe.src = iframeSrc;
				iframe.width = '100%';
				iframe.height = '1000px';
				iframe.frameBorder = '0';
				iframe.scrolling = 'no';
				iframe.dataset.autoresize = 'true';
	
				button.parentNode.replaceChild(iframe, button);
			});
		});

	}

	if (teamsCarousel.container) {
		const emblaTeamsApi = EmblaCarousel(teamsCarousel.container, {
			loop: false,
			align: 'start',
		});

		teamsCarousel.prevButton.addEventListener('click', () =>
			emblaTeamsApi.scrollPrev()
		);
		teamsCarousel.nextButton.addEventListener('click', () =>
			emblaTeamsApi.scrollNext()
		);

		let autoplayInterval;

		const autoplay = () => {
			autoplayInterval = setInterval(() => {
				emblaTeamsApi.scrollNext();
			}, 7000);
		};

		const stopAutoplay = () => {
			clearInterval(autoplayInterval);
		};

		teamsCarousel.container.addEventListener('mouseenter', stopAutoplay);
		teamsCarousel.container.addEventListener('mouseleave', autoplay);

		autoplay();
	}

	if (heroSlider) {
		const emblaApi = EmblaCarousel(heroSlider, { loop: true });
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
				dot.querySelector('.slide-number').style.display = isActive
					? 'inline-block'
					: 'none';
				dot.querySelector('.dot-line').style.display = isActive
					? 'block'
					: 'none';
			});
		};

		emblaApi.on('select', updateDots);
		setupDots();

		let heroAutoplayInterval;

		const heroAutoplay = () => {
			heroAutoplayInterval = setInterval(() => {
				emblaApi.scrollNext();
			}, 10000);
		};

		const stopHeroAutoplay = () => {
			clearInterval(heroAutoplayInterval);
		};

		heroSlider.addEventListener('mouseenter', stopHeroAutoplay);
		heroSlider.addEventListener('mouseleave', heroAutoplay);

		heroAutoplay();
	}




});
