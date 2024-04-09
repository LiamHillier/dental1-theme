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

document.addEventListener('DOMContentLoaded', function () {
	const menuIcon = document.querySelector('.feather-menu');
	const menuClose = document.querySelector('.menu-close');
	const fullScreenMenu = document.querySelector('.mobile-menu');

	menuIcon.addEventListener('click', function () {
		fullScreenMenu.classList.toggle('hidden');
	});

	menuClose.addEventListener('click', function () {
		fullScreenMenu.classList.add('hidden');
	});
});

document.addEventListener('DOMContentLoaded', function () {
    const hasChildrenMenus = document.querySelectorAll('.menu-item-has-children');
    let hideSubmenuTimeout; // Declare a variable to hold the timeout ID

    hasChildrenMenus.forEach(menu => {
        let isTouchDevice = false; 

        function showSubmenu(submenu) {
            submenu.style.display = 'flex';
            submenu.style.visibility = 'hidden';

            const submenuRect = submenu.getBoundingClientRect();
            const overflowRight = submenuRect.right + 50 - window.innerWidth;

            if (overflowRight > 0) {
                submenu.style.left = `auto`;
                submenu.style.right = `0px`;
            } else {
                submenu.style.left = `0`;
                submenu.style.right = `auto`;
            }

            submenu.style.visibility = 'visible';
        }

        function hideSubmenu(submenu) {
            // Wrap the hiding logic in a function to delay its execution
            hideSubmenuTimeout = setTimeout(() => {
                submenu.style.display = 'none';
                submenu.style.left = '';
                submenu.style.right = '';
                submenu.style.visibility = '';
            }, 300); // Delay hiding to allow moving to sub-submenu
        }

        function cancelHideSubmenu() {
            clearTimeout(hideSubmenuTimeout); // Cancel the scheduled hiding
        }

        menu.addEventListener('mouseenter', function () {
            if (!isTouchDevice) {
                const submenu = this.querySelector('.sub-menu');
                showSubmenu(submenu);
                cancelHideSubmenu(); // Cancel hiding if re-entering
            }
        });

        menu.addEventListener('mouseleave', function () {
            if (!isTouchDevice) {
                const submenu = this.querySelector('.sub-menu');
                hideSubmenu(submenu);
            }
        });

        // Add mouseenter listener to the submenu itself to prevent hiding when moving towards sub-submenu
        menu.querySelectorAll('.sub-menu').forEach(submenu => {
            submenu.addEventListener('mouseenter', cancelHideSubmenu);
            submenu.addEventListener('mouseleave', () => hideSubmenu(submenu));
        });

        menu.addEventListener('click', function (event) {
            isTouchDevice = true; 
            const submenu = this.querySelector('.sub-menu');
            if (submenu.style.display === 'flex') {
                hideSubmenu(submenu);
            } else {
                event.stopPropagation(); 
                showSubmenu(submenu);
            }
        });

        document.addEventListener('click', function () {
            if (isTouchDevice) {
                const submenu = menu.querySelector('.sub-menu');
                if (submenu && submenu.style.display === 'flex') {
                    hideSubmenu(submenu);
                }
            }
        });
    });
});


  


document.addEventListener('DOMContentLoaded', () => {
	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.remove('animate__initial');

					entry.target.style.animationPlayState = 'running';
					observer.unobserve(entry.target);
				}
			});
		},
		{
			threshold: 0.1, // Adjust as necessary
		}
	);

	document.querySelectorAll('.animate__animated').forEach((element) => {
		observer.observe(element);
	});
});

// JavaScript to handle custom dropdown functionality
const styledSelect = document.getElementById('styled-select');
const selectText = document.getElementById('select-text');
const selectContent = document.getElementById('select-content');
const serviceContents = document.querySelectorAll('.service-content');

// Function to toggle dropdown content
function toggleDropdown() {
	selectContent.style.display =
		selectContent.style.display === 'block' ? 'none' : 'block';
}

function updateServiceContent(selectedOptionId) {
	// Hide all children of each service content
	serviceContents.forEach((content) => {
		Array.from(content.children).forEach((child) => {
			child.style.display = 'none';
		});
	});

	// Determine the ID of the child content to display
	const contentId = selectedOptionId + '-content';

	// Show the child content corresponding to the selected option
	const selectedContent = document.getElementById(contentId);
	if (selectedContent) {
		selectedContent.style.display = 'block';
	}
}

// Store SVG and text content for each option
const optionContent = {
	'childrens-dentistry': {
		svg: `<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" viewBox="0.00 0.00 50.00 51.00">
        <path fill="currentColor" d="   M 0.00 5.21   L 0.00 4.42   Q 1.43 3.86 2.51 2.94   Q 2.91 2.60 3.05 2.10   Q 3.27 1.32 3.72 0.68   Q 4.29 -0.12 4.58 0.82   Q 5.27 3.09 7.38 4.00   Q 9.42 4.87 7.33 5.57   Q 5.66 6.14 4.85 8.03   Q 3.98 10.09 3.38 7.94   Q 2.82 5.90 0.00 5.21   Z   M 5.15 4.74   A 1.01 1.01 0.0 0 0 4.14 3.73   A 1.01 1.01 0.0 0 0 3.13 4.74   A 1.01 1.01 0.0 0 0 4.14 5.75   A 1.01 1.01 0.0 0 0 5.15 4.74   Z" />
        <path fill="currentColor" d="   M 8.06 29.74   Q 5.45 25.01 5.00 19.00   C 4.46 11.68 9.76 5.80 17.08 5.65   C 21.05 5.57 23.84 8.51 28.03 6.77   C 37.56 2.83 46.39 10.13 45.15 20.12   Q 44.47 25.52 42.07 29.89   Q 40.73 32.31 40.14 35.19   Q 38.77 41.86 37.24 48.01   C 36.21 52.18 30.34 51.58 29.65 47.22   Q 28.51 39.97 27.30 32.85   Q 26.94 30.77 24.99 30.74   A 2.02 2.01 -84.9 0 0 22.97 32.44   Q 21.68 40.47 20.50 47.22   C 19.73 51.62 13.99 52.19 12.94 47.97   Q 11.32 41.42 9.84 34.45   Q 9.32 32.01 8.06 29.74   Z   M 28.90 32.76   Q 30.26 40.71 31.35 47.45   A 2.07 2.06 1.7 0 0 32.95 49.14   Q 35.30 49.65 35.84 47.26   Q 37.32 40.77 38.73 34.27   Q 39.28 31.69 40.57 29.39   C 44.80 21.81 45.90 10.61 35.48 7.44   C 33.96 6.98 31.33 7.18 29.88 7.84   Q 25.16 9.95 20.85 8.02   C 15.88 5.79 10.22 8.27 7.79 12.81   C 5.25 17.54 7.16 25.12 9.73 29.59   Q 10.91 31.64 11.44 34.14   Q 12.97 41.38 14.47 47.59   A 2.15 2.15 0.0 0 0 16.52 49.24   Q 18.55 49.27 18.88 47.26   Q 20.10 39.67 21.40 32.50   C 22.23 27.90 28.11 28.13 28.90 32.76   Z" />
        <path fill="currentColor" d="   M 13.81 12.42   C 12.10 13.19 10.90 14.69 10.93 16.61   A 0.71 0.71 0.0 0 1 10.35 17.32   L 10.07 17.37   A 0.73 0.73 0.0 0 1 9.21 16.57   Q 9.68 12.39 13.47 10.91   Q 13.93 10.73 14.03 11.21   L 14.15 11.77   Q 14.25 12.23 13.81 12.42   Z" />
        <path fill="currentColor" d="   M 15.82 11.49   A 0.63 0.61 -17.4 0 1 16.19 10.80   Q 16.50 10.67 16.85 10.67   A 0.81 0.81 0.0 0 1 17.67 11.39   Q 17.71 11.80 17.44 12.08   Q 17.29 12.25 17.07 12.29   Q 16.03 12.52 15.82 11.49   Z" />
        <path fill="currentColor" d="   M 50.00 39.53   L 50.00 40.58   Q 47.33 41.23 46.97 42.75   Q 46.26 45.69 45.13 42.88   Q 44.55 41.45 43.09 40.93   Q 40.50 40.02 43.08 39.08   Q 44.64 38.51 45.31 36.82   Q 46.16 34.69 46.82 36.89   Q 47.36 38.68 50.00 39.53   Z   M 47.05 40.00   A 0.97 0.97 0.0 0 0 46.08 39.03   A 0.97 0.97 0.0 0 0 45.11 40.00   A 0.97 0.97 0.0 0 0 46.08 40.97   A 0.97 0.97 0.0 0 0 47.05 40.00   Z" />
    </svg>`, // SVG HTML for option 1
		text: "Children's Dentistry",
	},
	'cosmetic-dentistry': {
		svg: `<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" viewBox="0.00 0.00 40.00 55.00">
		<path fill="currentColor" d="
		  M 18.98 0.00
		  L 21.40 0.00
		  Q 30.14 1.19 35.15 7.68
		  Q 38.10 11.50 38.71 15.98
		  Q 39.41 21.12 38.63 25.78
		  Q 38.57 26.19 38.81 26.52
		  C 41.51 30.23 38.41 34.73 34.58 35.77
		  Q 34.09 35.90 33.94 36.38
		  Q 32.13 42.29 26.45 45.71
		  A 0.98 0.97 -20.8 0 0 25.99 46.72
		  Q 26.99 52.22 30.90 53.93
		  Q 31.31 54.11 31.19 54.55
		  Q 31.13 54.77 30.90 55.00
		  L 29.91 55.00
		  Q 25.72 52.48 24.85 47.25
		  Q 24.73 46.54 24.11 46.90
		  Q 20.24 49.19 16.39 46.97
		  Q 15.77 46.61 15.61 47.31
		  Q 14.44 52.48 10.48 55.00
		  L 9.49 55.00
		  Q 9.30 54.74 9.24 54.52
		  A 0.53 0.52 -20.5 0 1 9.51 53.94
		  Q 13.88 51.66 14.19 46.51
		  A 1.06 1.06 0.0 0 0 13.67 45.53
		  Q 8.38 42.41 6.42 36.55
		  Q 6.23 35.99 5.66 35.80
		  C 2.15 34.66 -1.33 30.18 1.50 26.63
		  Q 1.82 26.24 1.74 25.75
		  Q 1.07 21.62 1.49 17.06
		  Q 1.89 12.78 4.15 9.20
		  Q 9.07 1.39 18.98 0.00
		  Z
		  M 35.63 18.42
		  Q 35.49 18.64 35.20 18.59
		  A 0.34 0.34 0.0 0 0 34.81 18.98
		  L 35.60 24.62
		  Q 35.66 25.09 36.13 25.14
		  L 36.99 25.23
		  Q 37.48 25.28 37.52 24.80
		  C 38.27 16.16 37.17 9.15 29.34 4.16
		  Q 21.84 -0.63 14.21 2.51
		  C 4.24 6.61 1.80 14.83 2.79 24.69
		  Q 2.86 25.39 3.54 25.24
		  L 4.26 25.09
		  Q 4.75 24.99 4.82 24.49
		  L 5.58 18.84
		  A 0.44 0.43 13.9 0 0 5.29 18.37
		  Q 5.03 18.27 4.99 18.03
		  Q 4.87 17.41 5.49 17.37
		  Q 10.22 17.04 13.14 12.45
		  C 16.26 7.56 21.81 6.26 26.00 10.76
		  Q 26.38 11.18 26.94 11.29
		  C 31.43 12.14 31.12 16.73 35.34 17.71
		  Q 35.99 17.86 35.63 18.42
		  Z
		  M 25.53 12.13
		  Q 21.90 7.49 16.91 10.32
		  Q 15.52 11.10 14.52 12.65
		  C 12.84 15.25 10.52 17.62 7.47 18.35
		  A 0.81 0.79 89.5 0 0 6.89 18.95
		  Q 5.35 26.17 7.02 33.90
		  Q 8.85 42.41 17.03 45.96
		  Q 19.61 47.08 21.64 46.43
		  C 34.22 42.43 35.13 30.38 33.48 19.12
		  Q 33.41 18.64 33.04 18.31
		  Q 31.02 16.52 29.55 14.18
		  Q 28.64 12.73 26.93 12.78
		  Q 26.06 12.81 25.53 12.13
		  Z
		  M 3.24 28.55
		  Q 3.76 28.23 4.31 28.48
		  Q 5.05 28.81 5.03 28.00
		  L 5.01 26.99
		  Q 5.00 26.37 4.38 26.44
		  C 3.14 26.58 2.13 27.23 1.98 28.56
		  Q 1.56 32.36 5.16 34.24
		  A 0.41 0.41 0.0 0 0 5.75 33.80
		  L 5.09 30.52
		  Q 4.96 29.84 4.27 29.81
		  Q 3.70 29.79 3.22 29.47
		  A 0.55 0.54 46.4 0 1 3.24 28.55
		  Z
		  M 37.01 29.46
		  L 35.94 29.84
		  Q 35.35 30.05 35.23 30.66
		  L 34.73 33.19
		  Q 34.37 35.02 35.87 33.90
		  C 38.24 32.14 40.16 27.88 36.32 26.42
		  A 0.67 0.66 12.4 0 0 35.42 26.99
		  L 35.35 28.09
		  Q 35.31 28.57 35.78 28.45
		  Q 36.48 28.27 37.10 28.68
		  Q 37.85 29.17 37.01 29.46
		  Z"
		/>
		<path fill="currentColor" d="
		  M 20.8999 16.9484
		  A 0.74 0.59 -0.9 0 1 20.1693 17.5499
		  A 0.74 0.59 -0.9 0 1 19.4201 16.9716
		  A 0.74 0.59 -0.9 0 1 20.1507 16.3701
		  A 0.74 0.59 -0.9 0 1 20.8999 16.9484
		  Z"
		/>
		<path fill="currentColor" d="
		  M 17.8333 16.9342
		  A 0.80 0.60 -21.7 0 1 17.3118 17.7875
		  A 0.80 0.60 -21.7 0 1 16.3467 17.5258
		  A 0.80 0.60 -21.7 0 1 16.8682 16.6725
		  A 0.80 0.60 -21.7 0 1 17.8333 16.9342
		  Z"
		/>
		<path fill="currentColor" d="
		  M 22.49 16.85
		  Q 23.02 16.53 23.61 16.80
		  Q 24.42 17.17 23.65 17.62
		  Q 22.98 18.01 22.41 17.38
		  A 0.35 0.35 0.0 0 1 22.49 16.85
		  Z"
		/>
		<path fill="currentColor" d="
		  M 14.8539 17.7618
		  A 0.69 0.47 -12.4 0 1 14.2809 18.3690
		  A 0.69 0.47 -12.4 0 1 13.5061 18.0582
		  A 0.69 0.47 -12.4 0 1 14.0791 17.4510
		  A 0.69 0.47 -12.4 0 1 14.8539 17.7618
		  Z"
		/>
		<path fill="currentColor" d="
		  M 20.1860 22.9895
		  A 0.71 0.46 87.9 0 1 19.7003 22.2969
		  A 0.71 0.46 87.9 0 1 20.1340 21.5705
		  A 0.71 0.46 87.9 0 1 20.6197 22.2631
		  A 0.71 0.46 87.9 0 1 20.1860 22.9895
		  Z"
		/>
		<path fill="currentColor" d="
		  M 8.57 23.70
		  Q 8.29 23.74 8.02 23.86
		  Q 7.53 24.07 7.84 23.64
		  C 9.31 21.57 14.67 22.38 16.93 23.02
		  Q 17.20 23.09 17.09 23.35
		  L 16.92 23.77
		  Q 16.83 23.98 16.60 23.94
		  Q 11.92 23.19 8.57 23.70
		  Z"
		/>
		<path fill="currentColor" d="
		  M 31.37 23.40
		  L 23.67 23.82
		  Q 23.49 23.83 23.46 23.65
		  L 23.39 23.29
		  A 0.33 0.32 -12.7 0 1 23.63 22.92
		  C 25.92 22.35 31.06 21.71 32.44 23.50
		  Q 33.11 24.37 32.14 23.87
		  Q 31.94 23.76 31.80 23.59
		  Q 31.63 23.38 31.37 23.40
		  Z"
		/>
		<path fill="currentColor" d="
		  M 20.1187 26.1100
		  A 0.76 0.39 90.1 0 1 19.7300 25.3493
		  A 0.76 0.39 90.1 0 1 20.1213 24.5900
		  A 0.76 0.39 90.1 0 1 20.5100 25.3507
		  A 0.76 0.39 90.1 0 1 20.1187 26.1100
		  Z"
		/>
		<path fill="currentColor" d="
		  M 9.80 26.98
		  Q 12.85 28.13 15.67 27.86
		  Q 16.02 27.83 16.03 28.18
		  Q 16.04 28.44 15.81 28.56
		  C 13.60 29.66 11.23 28.57 9.01 28.14
		  A 0.30 0.30 0.0 0 1 8.83 27.66
		  L 9.25 27.13
		  A 0.49 0.49 0.0 0 1 9.80 26.98
		  Z"
		/>
		<path fill="currentColor" d="
		  M 29.16 27.33
		  Q 30.04 26.95 31.01 27.15
		  Q 31.40 27.23 31.46 27.62
		  L 31.51 27.96
		  Q 31.54 28.17 31.33 28.19
		  C 28.71 28.43 27.13 29.62 24.31 28.60
		  Q 24.12 28.53 24.17 28.34
		  L 24.23 28.09
		  Q 24.32 27.74 24.67 27.80
		  Q 27.05 28.22 29.16 27.33
		  Z"
		/>
		<path fill="currentColor" d="
		  M 17.1805 29.8408
		  A 0.82 0.35 -37.5 0 1 16.7431 30.6177
		  A 0.82 0.35 -37.5 0 1 15.8795 30.8392
		  A 0.82 0.35 -37.5 0 1 16.3169 30.0623
		  A 0.82 0.35 -37.5 0 1 17.1805 29.8408
		  Z"
		/>
		<path fill="currentColor" d="
		  M 14.4895 31.7918
		  A 0.70 0.48 -13.9 0 1 13.9253 32.4259
		  A 0.70 0.48 -13.9 0 1 13.1305 32.1282
		  A 0.70 0.48 -13.9 0 1 13.6947 31.4941
		  A 0.70 0.48 -13.9 0 1 14.4895 31.7918
		  Z"
		/>
		<path fill="currentColor" d="
		  M 27.2700 31.9475
		  A 0.71 0.43 -0.2 0 1 26.5615 32.3800
		  A 0.71 0.43 -0.2 0 1 25.8500 31.9525
		  A 0.71 0.43 -0.2 0 1 26.5585 31.5200
		  A 0.71 0.43 -0.2 0 1 27.2700 31.9475
		  Z"
		/>
		<path fill="currentColor" d="
		  M 11.5520 32.3369
		  A 0.68 0.57 -16.5 0 1 11.0619 33.0765
		  A 0.68 0.57 -16.5 0 1 10.2480 32.7231
		  A 0.68 0.57 -16.5 0 1 10.7381 31.9835
		  A 0.68 0.57 -16.5 0 1 11.5520 32.3369
		  Z"
		/>
		<path fill="currentColor" d="
		  M 20.59 33.40
		  L 21.61 32.89
		  Q 22.23 32.58 22.31 33.27
		  Q 22.38 33.84 21.91 34.11
		  Q 19.80 35.34 17.98 33.70
		  A 0.52 0.52 0.0 0 1 17.86 33.09
		  Q 18.09 32.60 18.47 32.79
		  Q 19.13 33.10 19.80 33.41
		  A 0.90 0.89 43.9 0 0 20.59 33.40
		  Z"
		/>
		<path fill="currentColor" d="
		  M 24.75 37.46
		  A 0.04 0.04 0.0 0 1 24.79 37.50
		  L 24.79 37.56
		  A 4.47 1.38 -0.0 0 1 20.32 38.94
		  L 20.02 38.94
		  A 4.47 1.38 -0.0 0 1 15.55 37.56
		  L 15.55 37.50
		  A 0.04 0.04 0.0 0 1 15.59 37.46
		  L 24.75 37.46
		  Z"
		/>
		<path fill="currentColor" d="
		  M 21.7098 40.6962
		  A 1.50 0.66 1.0 0 1 20.1985 41.3299
		  A 1.50 0.66 1.0 0 1 18.7102 40.6438
		  A 1.50 0.66 1.0 0 1 20.2215 40.0101
		  A 1.50 0.66 1.0 0 1 21.7098 40.6962
		  Z"
		/>
		<path fill="currentColor" d="
		  M 25.7690 41.9722
		  A 1.00 0.40 -36.0 0 1 25.1951 42.8836
		  A 1.00 0.40 -36.0 0 1 24.1510 43.1478
		  A 1.00 0.40 -36.0 0 1 24.7249 42.2364
		  A 1.00 0.40 -36.0 0 1 25.7690 41.9722
		  Z"
		/>
		<path fill="currentColor" d="
		  M 15.9564 43.0214
		  A 0.84 0.42 37.5 0 1 15.0343 42.8432
		  A 0.84 0.42 37.5 0 1 14.6236 41.9986
		  A 0.84 0.42 37.5 0 1 15.5457 42.1768
		  A 0.84 0.42 37.5 0 1 15.9564 43.0214
		  Z"
		/>
		<path fill="currentColor" d="
		  M 22.8966 43.6401
		  A 0.74 0.56 -29.1 0 1 22.5223 44.4893
		  A 0.74 0.56 -29.1 0 1 21.6034 44.3599
		  A 0.74 0.56 -29.1 0 1 21.9777 43.5107
		  A 0.74 0.56 -29.1 0 1 22.8966 43.6401
		  Z"
		/>
		<path fill="currentColor" d="
		  M 18.9039 44.2264
		  A 0.83 0.51 14.4 0 1 17.9732 44.5140
		  A 0.83 0.51 14.4 0 1 17.2961 43.8136
		  A 0.83 0.51 14.4 0 1 18.2268 43.5260
		  A 0.83 0.51 14.4 0 1 18.9039 44.2264
		  Z"
		/>
		</svg>
		`, // SVG HTML for option 2
		text: 'Cosmetic Dentistry',
	},
	// Add more options as needed
};

function updateSelectText(optionId) {
	const content = optionContent[optionId];
	selectText.innerHTML = content.svg + content.text;
}

if (styledSelect) {
	// Event listener to toggle dropdown
	styledSelect.addEventListener('click', toggleDropdown);

	// Event listeners for options
	['childrens-dentistry', 'cosmetic-dentistry'].forEach((optionId) => {
		const option = document.getElementById(optionId);
		option.addEventListener('click', function (e) {
			e.preventDefault();
			toggleDropdown();
			updateServiceContent(optionId);
			updateSelectText(optionId);
		});
	});

	// Initialize with default content
	document.addEventListener('DOMContentLoaded', () => {
		updateServiceContent('childrens-dentistry');
		updateSelectText('childrens-dentistry');
	});
}

const locationList = document.getElementById('location-list');
const locationTitle = document.getElementById('location-title');
const locationPhone = document.getElementById('location-phone');
const locationEmail = document.getElementById('location-email');
const locationAddress = document.getElementById('location-address');

if (locationList) {
	// Make the first <li> element active by default
	const firstLi = locationList.querySelector('li');
	firstLi.classList.add('active');

	locationList.addEventListener('click', function (event) {
		if (event.target.tagName === 'LI') {
			// Remove "active" class from all <li> elements
			const liElements = locationList.querySelectorAll('li');
			liElements.forEach((li) => {
				li.classList.remove('active');
			});

			// Add "active" class to the clicked <li> element
			event.target.classList.add('active');

			locationTitle.textContent =
				'Dental one in ' + event.target.getAttribute('data-title');
			locationPhone.href =
				'tel:' + event.target.getAttribute('data-phone');
			locationPhone.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1 text-primary">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.970c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg> ${event.target.getAttribute('data-phone')}`;
			locationEmail.href =
				'mailto:' + event.target.getAttribute('data-email');
			locationEmail.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1 text-primary">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg> ${event.target.getAttribute('data-email')}`;
			locationAddress.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1 text-primary">
                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg> ${event.target.getAttribute('data-address')}`;
		}
	});
}

const OPTIONS = { slidesToScroll: 'auto', containScroll: 'trimSnaps' };

const teamNode = document.querySelector('.team');

if (teamNode) {
	const viewportNode = teamNode.querySelector('.team__viewport');

	// @ts-ignore
	const teamApi = EmblaCarousel(viewportNode, OPTIONS);

	// Grab button nodes
	const prevButtonNode = document.querySelector('.team__prev');

	prevButtonNode.addEventListener('click', teamApi.scrollPrev, false);
}

const locationsContainer = document.querySelector('#locations');

if (locationsContainer) {
	mapboxgl.accessToken =
		'pk.eyJ1IjoibGlhbXRzYSIsImEiOiJjbGxieDM5cmQwNmNuM3FsNWVnZ2g0YnA2In0.Y1YQ4L3WfY9MgaxwsqwU0w';
	var map = new mapboxgl.Map({
		container: 'map', // The id of the map container
		style: 'mapbox://styles/liamtsa/clqhfvanb000i01pm5bsu38be', // Using the light theme style
		center: [145.307193491332, -37.944962859363], // Set the initial center of the map (for example, using the Reservoir coordinates)
		zoom: 8.5, // Initial zoom level,
		dragPan: false,
	});

	var currentOpenPopup = null; // Global variable to keep track of the open popup

	// After the map has been initialized and loaded
	map.on('load', function () {
		// Disable all of the following interactions:
		map.boxZoom.disable(); // Disable box zoom
		map.scrollZoom.disable(); // Disable scroll zoom
		map.dragPan.disable(); // Disable drag pan
		map.dragRotate.disable(); // Disable drag rotate
		map.keyboard.disable(); // Disable keyboard
		map.doubleClickZoom.disable(); // Disable double click zoom
		map.touchZoomRotate.disable(); // Disable touch zoom rotate
	});

	// List of coordinates and messages for each location
	var locations = [
		{ coords: [144.91196, -37.74778], message: 'Essendon' },
		{ coords: [144.93931, -37.599], message: 'Craigieburn' },
		{ coords: [145.10872, -37.77277], message: 'Lower Templestowe' },
		{ coords: [145.004395, -37.621441], message: 'Epping' },
		{ coords: [145.01091, -37.81175], message: 'Richmond' },
		{ coords: [145.007193491332, -37.714962879063], message: 'Reservoir' },
	];

	var locationDetails2 = {};
	var locationElements = document.querySelectorAll('#location-list li');
	locationElements.forEach(function (elem) {
		var title = elem.getAttribute('data-title');
		locationDetails2[title] = {
			phone: elem.getAttribute('data-phone'),
			address: elem.getAttribute('data-address'),
			email: elem.getAttribute('data-email'),
		};
	});

	locations.forEach(function (location) {
		// Create a marker element
		var el = document.createElement('div');
		el.className = 'marker';

		// Create a popup
		var popup = new mapboxgl.Popup({ offset: { bottom: [0, 45] } }).setText(
			location.message
		);

		// Create and store the Mapbox marker object
		location.marker = new mapboxgl.Marker(el)
			.setLngLat(location.coords)
			.setPopup(popup)
			.addTo(map);

		el.addEventListener('click', function () {
			// Remove active class from all markers
			document.querySelectorAll('.marker').forEach(function (markerEl) {
				markerEl.classList.remove('marker-active');
			});
			// Add active class to the clicked marker
			el.classList.add('marker-active');
			var coords = location.coords;

			isCycling = false;
			clearTimeout(popupCycleInterval);
			updateLocationDetails(location.message);
		});
	});

	function updateLocationDetails(locationName) {
		var details = locationDetails2[locationName];

		if (details) {
			document.getElementById('location-title').innerText =
				'Dental one in ' + locationName;
			document.getElementById('phone-text').innerText = details.phone;
			document.getElementById('email-text').innerText = details.email;
			document.getElementById('address-text').innerText = details.address;
		} else {
			console.log('Details not found for location:', locationName);
		}
	}

	map.on('style.load', function () {
		var waterLayerIds = map
			.getStyle()
			.layers.filter(function (layer) {
				return (
					layer['type'] === 'fill' &&
					layer['source-layer'] === 'water'
				);
			})
			.map(function (layer) {
				return layer.id;
			});

		waterLayerIds.forEach(function (id) {
			map.setPaintProperty(id, 'fill-color', '#f3f4f6');
		});
	});
	var isCycling = true;
	var currentPopupIndex = 0;
	var popupCycleInterval;
	var cycleDuration = 3000; // Duration for each popup to stay open (in milliseconds)

	function cyclePopups() {
		// Check if it's the end of the locations array and reset if necessary
		if (currentPopupIndex >= locations.length) {
			currentPopupIndex = 0;
		}

		var location = locations[currentPopupIndex];
		var popup = new mapboxgl.Popup({ offset: { bottom: [0, 45] } })
			.setLngLat(location.coords)
			.setText(location.message)
			.addTo(map);

		document
			.querySelectorAll('.marker')
			.forEach(function (markerEl, index) {
				if (index === currentPopupIndex) {
					markerEl.classList.add('marker-active');
				} else {
					markerEl.classList.remove('marker-active');
				}
			});

		// Update the location details and position them
		updateLocationDetails(location.message);

		// Increment the index for the next cycle
		currentPopupIndex++;

		// Schedule the next cycle
		popupCycleInterval = setTimeout(function () {
			popup.remove(); // Remove the current popup
			cyclePopups(); // Continue cycling
		}, cycleDuration);
	}

	// Start the cycling when ready
	cyclePopups();

	function geocodeAddress(address, callback) {
		// Southwest corner (longitude, latitude) and Northeast corner (longitude, latitude) of Melbourne
		var melbourneBbox = [
			144.593741856, -38.433859306, 145.512528832, -37.5112737225,
		];
		var geocoder = new MapboxGeocoder({
			accessToken: mapboxgl.accessToken,
			mapboxgl: map,
			marker: false,
			flyTo: false,
			countries: 'AU', // Limit search to Australia
			bbox: melbourneBbox, // Limit search to the Melbourne area
		});
		geocoder.addTo('#geocoder-container');

		geocoder.query(address);
		geocoder.on('result', function (result) {
			const data = result.result;
			// Check if the response has a center property
			if (data && data.center) {
				var coords = data.center;
				callback(coords);
			} else {
				console.log('No valid location found in geocoding response.');
			}
		});
	}

	function findClosestMarker(coordinates) {
		var closestMarker = null;
		var closestDistance = Infinity;

		locations.forEach(function (location) {
			var distance = getDistanceBetweenPoints(
				coordinates,
				location.coords
			);
			if (distance < closestDistance) {
				closestDistance = distance;
				closestMarker = location; // Assuming location has a reference to the marker
			}
		});

		return closestMarker; // Return the marker object
	}

	function getDistanceBetweenPoints(point1, point2) {
		// Calculate the distance between point1 and point2
		// Use a simple distance formula or a more complex method like Haversine formula for accuracy
		// For simplicity:
		var a = point1[0] - point2[0];
		var b = point1[1] - point2[1];

		return Math.sqrt(a * a + b * b);
	}

	document
		.getElementById('address-form')
		.addEventListener('submit', function (e) {
			e.preventDefault(); // Prevent the default form submission
			var address = document.getElementById('address-input').value;
			geocodeAddress(address, function (coords) {
				var closestMarker = findClosestMarker(coords);
				if (closestMarker) {
					// Stop cycling when search is complete
					isCycling = false;
					if (popupCycleInterval) {
						clearTimeout(popupCycleInterval);
					}
					setActiveMarker(closestMarker); // Use the marker object
				}
			});
		});

	function setActiveMarker(marker) {
		// Assuming marker has a property 'message' that corresponds to the location name

		var locationName = marker.message;

		// Update the details for the active marker
		updateLocationDetails(locationName);

		// Close any currently open popups
		locations.forEach(function (location) {
			if (location.marker) {
				var popup = location.marker.getPopup();
				if (popup) {
					popup.remove();
				}
				if (location.marker.getElement) {
					location.marker
						.getElement()
						.classList.remove('marker-active');
				}
			}
		});

		// Set the active style for the selected marker
		if (marker.marker && marker.marker.getElement) {
			marker.marker.getElement().classList.add('marker-active');
			// Open the popup for the active marker
			marker.marker.getPopup().addTo(map);
		} else {
			console.error('Invalid marker object:', marker);
		}
	}
}

window.addEventListener('scroll', function () {
	var header = document.getElementById('masthead');
	if (window.scrollY > 50) {
		header.classList.add('bg-white');
		header.classList.remove('bg-transparent');
	} else {
		header.classList.add('bg-transparent');
		header.classList.remove('bg-white');
	}
});

const heroSlider = document.querySelector('.hero');
if (heroSlider) {
	const options = { loop: false };

	const emblaApi = EmblaCarousel(heroSlider, options);
	const dotsContainer = document.querySelector('.embla__dots');

	const setupDots = () => {
		const slides = emblaApi.slideNodes();
		const dotsFragment = document.createDocumentFragment();

		slides.forEach((slide, index) => {
			const dot = document.createElement('button');
			dot.className = 'embla__dot';

			// Create the slide number element
			const slideNumber = document.createElement('span');
			slideNumber.className = 'slide-number';
			slideNumber.textContent = `0${index + 1}`; // Slide index is 0-based; add 1 for display
			dot.appendChild(slideNumber);

			// Create the inner div
			const dotInner = document.createElement('div');
			dotInner.className = 'dot-inner';
			dot.appendChild(dotInner);

			// Create the dot-line element
			const dotLine = document.createElement('div');
			dotLine.className = 'dot-line';
			dot.appendChild(dotLine);

			dot.addEventListener('click', () => emblaApi.scrollTo(index));
			dotsFragment.appendChild(dot);
		});

		dotsContainer.appendChild(dotsFragment);
		updateDots(); // This will initially set the correct state
	};

	const updateDots = () => {
		const dots = dotsContainer.querySelectorAll('.embla__dot');
		const selectedIndex = emblaApi.selectedScrollSnap();

		dots.forEach((dot, index) => {
			const isActive = index === selectedIndex;
			dot.classList.toggle('is-active', isActive);

			// Find the slide number and dot-line within the dot
			const slideNumber = dot.querySelector('.slide-number');
			const dotLine = dot.querySelector('.dot-line');

			// Update visibility based on active state
			slideNumber.style.display = isActive ? 'inline-block' : 'none';
			dotLine.style.display = isActive ? 'block' : 'none';
		});
	};

	// Use `emblaApi.on('select', updateDots)` instead of `embla.on('select', updateDots)`
	emblaApi.on('select', updateDots);

	// Don't forget to call `setupDots` to initialize the dots after defining it
	setupDots();
}
