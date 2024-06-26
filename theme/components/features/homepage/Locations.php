<section id="locations" class="pt-10 bg-gray-100 pb-36 relative -mb-1 px-5  md:px-0">
    <div class=" max-w-screen-2xl mx-auto relative">
        <div id='geocoder-container' class="hidden"></div>
        <div class="md:px-20 max-w-screen-2xl mx-auto md:flex justify-between items-center md:flex-wrap md:gap-10">
            <div>
                <header class="flex flex-col items-center gap-2 text-center mb-2 ">
                    <div class="w-12 h-12">
                        <?php echo file_get_contents('wp-content/themes/dental1/theme/assets/logos/icon.svg'); ?>
                    </div>
                    <p class="text-primary ">Locations
                    </p>
                    <h2 class="">Our clinics across
                        <br><span class="!text-primary">Melbourne</span>
                    </h2>
                </header>
                <div class="flex flex-col items-center gap-2 locations-description">
                    <p class="text-center ">At DentalOne, we
                        are
                        more than just a dental practice; we are your
                        trusted
                        partner
                        in achieving and maintaining a beautiful, healthy smile.</p>
                    <a href="/book-appointment" class="link mt-4  ">
                        Book your consult
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


        <div class="locations-map hidden md:block relative">
            <svg class="svg">
                <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
                    <path fill="none" stroke="none" d="M1,0.161 L1,0.162 L0.998,0.165 Q0.998,0.165,0.998,0.165 C0.995,0.165,0.991,0.165,0.989,0.167 A0.001,0.001,81.6,0,0,0.989,0.167 C0.988,0.173,0.986,0.176,0.982,0.179 Q0.982,0.179,0.982,0.18 L0.986,0.205 A0,0.001,0,0,1,0.986,0.205 C0.98,0.208,0.974,0.212,0.97,0.218 C0.968,0.224,0.967,0.231,0.967,0.237 Q0.967,0.246,0.967,0.254 Q0.967,0.254,0.967,0.254 L0.971,0.261 A0.001,0.001,-59.6,0,1,0.972,0.262 L0.968,0.28 Q0.968,0.281,0.968,0.281 C0.97,0.288,0.973,0.294,0.976,0.299 C0.982,0.31,0.982,0.322,0.98,0.335 Q0.98,0.335,0.98,0.335 C0.976,0.337,0.973,0.339,0.972,0.344 C0.971,0.348,0.97,0.352,0.969,0.355 Q0.969,0.356,0.968,0.356 L0.959,0.356 Q0.958,0.356,0.958,0.355 Q0.959,0.335,0.946,0.321 Q0.946,0.321,0.946,0.321 C0.941,0.322,0.938,0.326,0.934,0.33 Q0.933,0.332,0.931,0.333 Q0.92,0.336,0.908,0.339 Q0.908,0.339,0.907,0.339 Q0.903,0.336,0.897,0.333 Q0.896,0.332,0.895,0.333 Q0.882,0.333,0.87,0.333 A0.005,0.007,60.8,0,1,0.867,0.332 C0.864,0.33,0.862,0.328,0.858,0.328 Q0.858,0.328,0.858,0.329 C0.855,0.336,0.849,0.338,0.844,0.341 A0.001,0.001,-12.6,0,0,0.844,0.342 Q0.844,0.357,0.845,0.366 Q0.847,0.376,0.849,0.384 Q0.849,0.385,0.849,0.386 L0.847,0.388 Q0.846,0.389,0.846,0.388 C0.843,0.386,0.838,0.382,0.834,0.384 C0.832,0.386,0.831,0.388,0.828,0.386 Q0.814,0.374,0.8,0.363 A0,0,36.5,0,0,0.8,0.363 L0.792,0.375 A0.001,0.001,0,0,1,0.791,0.375 C0.788,0.373,0.786,0.371,0.783,0.371 Q0.782,0.371,0.782,0.371 Q0.777,0.374,0.773,0.377 Q0.772,0.378,0.77,0.38 Q0.77,0.381,0.77,0.381 L0.772,0.388 Q0.772,0.389,0.772,0.389 Q0.776,0.388,0.779,0.39 Q0.779,0.39,0.779,0.391 C0.78,0.397,0.779,0.404,0.778,0.41 A0.001,0.001,23.5,0,0,0.778,0.411 L0.785,0.418 A0.001,0.001,-63.1,0,1,0.785,0.419 C0.785,0.419,0.784,0.42,0.784,0.42 Q0.78,0.421,0.778,0.424 C0.776,0.427,0.775,0.432,0.772,0.435 Q0.77,0.438,0.765,0.439 Q0.761,0.439,0.758,0.441 C0.755,0.442,0.753,0.444,0.752,0.447 C0.751,0.451,0.751,0.455,0.749,0.458 C0.748,0.459,0.746,0.46,0.745,0.46 Q0.741,0.458,0.736,0.456 A0.001,0.001,0,0,0,0.735,0.457 C0.736,0.458,0.736,0.459,0.737,0.46 Q0.738,0.461,0.739,0.462 Q0.739,0.463,0.739,0.463 L0.745,0.463 Q0.745,0.463,0.745,0.463 C0.745,0.478,0.742,0.492,0.739,0.506 Q0.738,0.511,0.738,0.517 Q0.738,0.517,0.738,0.517 C0.755,0.528,0.753,0.551,0.751,0.57 C0.751,0.584,0.751,0.599,0.751,0.613 A0.001,0.002,-24.5,0,1,0.751,0.614 L0.741,0.628 Q0.74,0.629,0.74,0.629 L0.741,0.637 Q0.741,0.637,0.741,0.638 L0.752,0.646 A0.001,0.001,-67.9,0,1,0.752,0.647 L0.747,0.677 A0.001,0.001,-13.2,0,1,0.746,0.678 Q0.741,0.683,0.736,0.688 Q0.735,0.689,0.734,0.691 Q0.725,0.71,0.719,0.727 Q0.718,0.729,0.718,0.731 Q0.718,0.732,0.718,0.732 L0.724,0.739 A0.001,0.001,-71.5,0,1,0.725,0.74 L0.725,0.775 Q0.725,0.776,0.726,0.776 L0.737,0.776 Q0.737,0.776,0.737,0.777 L0.735,0.811 Q0.735,0.811,0.734,0.811 Q0.719,0.81,0.703,0.809 Q0.69,0.809,0.679,0.809 Q0.675,0.809,0.671,0.81 C0.668,0.811,0.666,0.814,0.666,0.818 C0.664,0.827,0.663,0.838,0.663,0.848 Q0.663,0.849,0.663,0.849 Q0.662,0.849,0.661,0.848 C0.658,0.847,0.656,0.844,0.655,0.84 C0.654,0.835,0.653,0.831,0.65,0.827 C0.645,0.821,0.637,0.817,0.631,0.814 A0.001,0.002,0,0,0,0.629,0.816 Q0.629,0.821,0.627,0.827 A0.001,0.001,0,0,1,0.627,0.827 C0.623,0.828,0.618,0.828,0.614,0.826 A0,0.001,0,0,1,0.614,0.825 Q0.616,0.823,0.617,0.82 A0.001,0.001,-51.4,0,0,0.617,0.818 C0.615,0.815,0.612,0.812,0.609,0.809 C0.605,0.805,0.604,0.795,0.603,0.789 Q0.603,0.779,0.601,0.768 Q0.601,0.764,0.6,0.759 A0.001,0.001,-6.9,0,0,0.599,0.759 Q0.595,0.758,0.591,0.757 Q0.579,0.752,0.567,0.746 Q0.565,0.745,0.562,0.743 A0.002,0.003,-86.2,0,1,0.561,0.742 L0.558,0.73 A0.001,0.001,2.5,0,0,0.558,0.73 L0.542,0.721 Q0.541,0.72,0.54,0.722 Q0.539,0.723,0.543,0.726 Q0.545,0.727,0.546,0.727 L0.555,0.732 A0.001,0.001,0,0,1,0.555,0.732 L0.559,0.747 A0.001,0.001,0,0,1,0.559,0.747 L0.553,0.755 A0.001,0.001,-62.8,0,1,0.553,0.755 C0.545,0.754,0.541,0.748,0.535,0.743 A0,0,0,0,0,0.534,0.743 L0.532,0.748 A0,0.001,-61.4,0,1,0.531,0.749 L0.519,0.741 A0,0.001,0,0,0,0.519,0.741 C0.516,0.746,0.515,0.751,0.513,0.757 Q0.513,0.758,0.513,0.758 C0.51,0.759,0.506,0.762,0.503,0.762 A0.001,0.001,0,0,1,0.502,0.762 Q0.501,0.756,0.497,0.755 Q0.496,0.754,0.496,0.754 Q0.496,0.748,0.495,0.741 Q0.495,0.741,0.494,0.741 L0.489,0.741 Q0.488,0.741,0.488,0.741 C0.488,0.742,0.488,0.743,0.489,0.744 C0.493,0.751,0.495,0.762,0.492,0.77 Q0.492,0.77,0.492,0.77 C0.49,0.771,0.487,0.772,0.486,0.773 Q0.485,0.773,0.484,0.772 C0.48,0.768,0.479,0.763,0.478,0.757 Q0.478,0.756,0.478,0.756 L0.48,0.755 Q0.482,0.754,0.482,0.752 Q0.483,0.751,0.483,0.75 Q0.484,0.748,0.482,0.748 C0.469,0.755,0.452,0.748,0.44,0.74 Q0.439,0.74,0.439,0.74 Q0.439,0.74,0.439,0.741 A0.001,0.001,35,0,0,0.439,0.741 L0.44,0.743 Q0.44,0.743,0.44,0.743 Q0.447,0.747,0.455,0.751 Q0.457,0.752,0.463,0.754 Q0.463,0.754,0.464,0.755 L0.467,0.769 Q0.467,0.769,0.467,0.769 Q0.463,0.772,0.46,0.775 C0.456,0.781,0.438,0.805,0.449,0.812 Q0.449,0.812,0.449,0.813 L0.447,0.829 A0,0,0,0,1,0.447,0.829 C0.443,0.826,0.436,0.822,0.432,0.823 Q0.431,0.824,0.431,0.824 Q0.432,0.835,0.432,0.844 C0.432,0.85,0.434,0.859,0.439,0.861 Q0.441,0.862,0.443,0.863 Q0.444,0.864,0.444,0.866 C0.441,0.874,0.443,0.881,0.447,0.888 A0.001,0.001,0,0,1,0.446,0.891 Q0.441,0.89,0.438,0.888 Q0.434,0.885,0.431,0.883 Q0.43,0.882,0.43,0.883 L0.427,0.888 A0.001,0.001,0,0,0,0.427,0.89 Q0.435,0.896,0.442,0.903 C0.448,0.907,0.452,0.913,0.452,0.921 Q0.452,0.922,0.452,0.922 Q0.436,0.914,0.421,0.909 C0.399,0.903,0.372,0.904,0.363,0.935 Q0.363,0.935,0.363,0.935 C0.347,0.936,0.338,0.96,0.334,0.977 Q0.334,0.979,0.334,0.981 Q0.335,0.992,0.337,1 L0.258,1 L0.254,1 Q0.253,1,0.253,1 C0.253,0.987,0.251,0.977,0.245,0.968 Q0.241,0.963,0.237,0.958 C0.232,0.952,0.229,0.945,0.224,0.938 C0.212,0.92,0.198,0.903,0.183,0.888 Q0.181,0.885,0.179,0.882 Q0.176,0.877,0.173,0.873 Q0.171,0.87,0.168,0.868 C0.16,0.86,0.15,0.853,0.141,0.846 Q0.129,0.837,0.12,0.825 Q0.119,0.824,0.121,0.824 C0.129,0.828,0.138,0.83,0.147,0.833 Q0.158,0.837,0.167,0.844 Q0.168,0.846,0.17,0.849 Q0.174,0.856,0.178,0.862 C0.181,0.867,0.184,0.871,0.188,0.874 C0.2,0.883,0.214,0.885,0.227,0.883 C0.243,0.881,0.258,0.874,0.273,0.865 Q0.278,0.862,0.283,0.859 C0.296,0.853,0.312,0.845,0.316,0.826 Q0.316,0.825,0.316,0.825 C0.313,0.824,0.311,0.821,0.31,0.817 A0.001,0.002,-31.6,0,1,0.31,0.816 C0.317,0.805,0.325,0.795,0.331,0.783 Q0.336,0.774,0.336,0.766 C0.336,0.759,0.335,0.753,0.338,0.747 Q0.339,0.745,0.34,0.745 Q0.342,0.744,0.346,0.743 A0.002,0.002,11.9,0,0,0.346,0.742 Q0.351,0.735,0.357,0.726 C0.36,0.722,0.362,0.717,0.363,0.712 C0.365,0.706,0.368,0.701,0.372,0.697 A0.001,0.001,-50.2,0,1,0.373,0.697 L0.376,0.7 Q0.377,0.7,0.377,0.699 Q0.377,0.692,0.382,0.686 C0.385,0.683,0.387,0.68,0.389,0.676 Q0.389,0.674,0.389,0.67 C0.389,0.653,0.39,0.635,0.388,0.618 Q0.385,0.588,0.372,0.565 Q0.366,0.555,0.361,0.548 C0.359,0.544,0.351,0.533,0.347,0.537 Q0.344,0.541,0.341,0.543 A0.001,0.001,-48.9,0,1,0.34,0.544 C0.335,0.54,0.331,0.533,0.328,0.527 Q0.325,0.518,0.321,0.508 Q0.319,0.504,0.317,0.5 A0.001,0.001,0,0,1,0.317,0.499 L0.318,0.494 A0,0,0,0,0,0.318,0.494 L0.309,0.493 Q0.308,0.493,0.308,0.492 L0.309,0.486 Q0.309,0.485,0.31,0.485 L0.313,0.484 Q0.313,0.484,0.313,0.484 Q0.312,0.479,0.312,0.473 Q0.313,0.465,0.313,0.458 C0.314,0.455,0.313,0.451,0.311,0.449 Q0.309,0.445,0.306,0.441 Q0.305,0.44,0.305,0.44 Q0.305,0.433,0.304,0.425 Q0.304,0.423,0.303,0.421 C0.295,0.407,0.275,0.408,0.263,0.41 Q0.263,0.41,0.263,0.411 L0.263,0.419 Q0.263,0.42,0.263,0.42 L0.267,0.424 Q0.268,0.424,0.268,0.425 Q0.267,0.428,0.265,0.429 Q0.265,0.43,0.264,0.429 Q0.254,0.424,0.242,0.42 A0.002,0.002,-53.8,0,0,0.241,0.42 C0.234,0.426,0.227,0.429,0.219,0.433 Q0.207,0.44,0.203,0.455 Q0.202,0.457,0.202,0.459 Q0.203,0.469,0.204,0.478 A0.001,0.001,65.5,0,1,0.203,0.479 L0.201,0.482 Q0.201,0.482,0.2,0.482 C0.186,0.482,0.175,0.489,0.165,0.501 C0.16,0.508,0.154,0.516,0.147,0.522 Q0.141,0.527,0.139,0.529 C0.133,0.536,0.127,0.542,0.12,0.547 C0.118,0.548,0.116,0.549,0.114,0.549 Q0.106,0.548,0.098,0.547 Q0.096,0.547,0.094,0.548 C0.089,0.55,0.085,0.552,0.08,0.552 Q0.08,0.552,0.079,0.551 Q0.076,0.545,0.074,0.539 C0.073,0.537,0.071,0.535,0.069,0.534 Q0.066,0.533,0.063,0.532 A0,0.001,-85.3,0,1,0.063,0.532 C0.062,0.521,0.054,0.52,0.048,0.523 Q0.042,0.526,0.037,0.528 A0.001,0.001,-34.6,0,1,0.036,0.528 C0.028,0.519,0.022,0.506,0.016,0.494 A0,0.001,38.7,0,1,0.016,0.494 Q0.018,0.485,0.02,0.476 Q0.021,0.47,0.024,0.464 Q0.024,0.463,0.024,0.463 C0.021,0.453,0.016,0.446,0.011,0.438 C0.003,0.428,-0.001,0.417,0.001,0.402 A0.001,0.001,-3.5,0,1,0.001,0.402 L0.012,0.398 A0.001,0.001,85.6,0,0,0.013,0.397 L0.024,0.28 A0,0.001,-80.6,0,1,0.025,0.28 Q0.029,0.281,0.034,0.282 Q0.037,0.282,0.04,0.281 Q0.04,0.281,0.04,0.28 C0.041,0.274,0.039,0.268,0.039,0.262 C0.038,0.258,0.039,0.255,0.04,0.252 Q0.042,0.249,0.043,0.245 Q0.043,0.245,0.043,0.245 L0.041,0.222 Q0.041,0.221,0.041,0.221 Q0.043,0.215,0.046,0.208 Q0.046,0.207,0.046,0.205 Q0.046,0.195,0.046,0.185 Q0.046,0.183,0.047,0.18 C0.051,0.165,0.058,0.15,0.069,0.139 Q0.069,0.139,0.07,0.139 Q0.096,0.144,0.123,0.149 C0.128,0.15,0.13,0.156,0.133,0.16 Q0.133,0.16,0.133,0.16 C0.134,0.16,0.135,0.159,0.134,0.157 C0.129,0.142,0.115,0.134,0.106,0.121 A0.001,0.001,0,0,1,0.106,0.12 L0.113,0.088 A0,0.001,0,0,1,0.114,0.087 C0.12,0.09,0.128,0.091,0.134,0.086 C0.14,0.081,0.144,0.074,0.153,0.076 C0.161,0.077,0.166,0.082,0.172,0.088 C0.177,0.093,0.182,0.095,0.189,0.097 Q0.211,0.101,0.231,0.103 Q0.236,0.104,0.241,0.103 Q0.242,0.103,0.242,0.102 L0.243,0.094 Q0.243,0.094,0.243,0.094 Q0.246,0.094,0.249,0.095 Q0.27,0.099,0.288,0.102 Q0.3,0.105,0.314,0.105 A0.001,0.001,-78.3,0,0,0.315,0.105 L0.319,0.092 Q0.319,0.092,0.319,0.092 C0.316,0.09,0.313,0.088,0.312,0.085 Q0.311,0.083,0.311,0.082 Q0.315,0.06,0.32,0.04 Q0.32,0.039,0.32,0.039 L0.357,0.046 A0,0,0,0,0,0.357,0.046 L0.356,0.036 Q0.356,0.036,0.356,0.036 L0.365,0.032 Q0.365,0.032,0.365,0.032 Q0.365,0.022,0.37,0.016 C0.373,0.012,0.376,0.008,0.378,0.002 A0,0,0,0,1,0.378,0.002 Q0.379,0.003,0.38,0.004 Q0.384,0.006,0.389,0.009 Q0.389,0.009,0.389,0.009 Q0.39,0.016,0.394,0.023 Q0.394,0.023,0.395,0.023 L0.4,0.022 Q0.401,0.022,0.401,0.022 C0.401,0.017,0.401,0.011,0.404,0.008 A0,0.001,36.5,0,1,0.405,0.007 L0.423,0.023 A0.003,0.003,0,0,1,0.424,0.025 Q0.424,0.029,0.425,0.034 C0.425,0.036,0.426,0.038,0.427,0.039 C0.433,0.043,0.438,0.05,0.443,0.057 Q0.443,0.057,0.443,0.058 C0.442,0.061,0.441,0.064,0.442,0.067 A0.001,0.001,0,0,0,0.442,0.068 L0.454,0.072 A0,0,0,0,1,0.455,0.073 Q0.451,0.086,0.451,0.099 Q0.451,0.102,0.452,0.105 Q0.453,0.107,0.453,0.105 L0.457,0.08 A0,0,19.4,0,1,0.457,0.08 L0.462,0.084 Q0.462,0.084,0.462,0.084 L0.461,0.099 Q0.461,0.099,0.462,0.099 L0.468,0.098 Q0.468,0.098,0.468,0.098 L0.47,0.09 Q0.471,0.089,0.471,0.089 L0.483,0.089 Q0.483,0.089,0.483,0.09 Q0.493,0.11,0.507,0.127 Q0.51,0.13,0.513,0.131 C0.517,0.133,0.521,0.13,0.525,0.132 Q0.525,0.132,0.525,0.132 C0.525,0.138,0.525,0.144,0.526,0.149 A0.001,0.001,0,0,0,0.527,0.15 Q0.528,0.149,0.528,0.149 Q0.528,0.149,0.528,0.148 C0.528,0.143,0.528,0.136,0.529,0.131 A0.001,0.001,0,0,1,0.53,0.13 Q0.535,0.13,0.541,0.129 Q0.544,0.128,0.547,0.127 A0.001,0.001,-87.2,0,0,0.548,0.126 L0.551,0.119 Q0.551,0.119,0.551,0.119 L0.558,0.119 A0,0,0,0,1,0.559,0.119 L0.559,0.123 Q0.559,0.123,0.559,0.123 L0.571,0.124 Q0.571,0.124,0.571,0.124 L0.571,0.133 Q0.571,0.134,0.571,0.134 L0.583,0.135 Q0.584,0.135,0.584,0.135 L0.584,0.146 A0,0.001,3.5,0,0,0.585,0.146 L0.603,0.151 A0.002,0.002,-51.1,0,0,0.604,0.15 C0.611,0.147,0.617,0.145,0.624,0.147 Q0.624,0.147,0.624,0.148 Q0.628,0.161,0.637,0.172 Q0.638,0.172,0.638,0.172 Q0.642,0.171,0.645,0.168 Q0.646,0.167,0.646,0.167 C0.646,0.158,0.649,0.156,0.655,0.153 Q0.656,0.153,0.656,0.153 C0.668,0.157,0.679,0.164,0.687,0.176 Q0.691,0.182,0.692,0.187 C0.694,0.194,0.695,0.202,0.701,0.205 C0.704,0.207,0.707,0.205,0.71,0.204 Q0.715,0.2,0.72,0.196 Q0.73,0.189,0.74,0.179 A0.001,0.001,68,0,0,0.74,0.179 Q0.739,0.172,0.738,0.165 C0.738,0.161,0.738,0.157,0.738,0.153 A0,0.001,0,0,1,0.739,0.153 Q0.742,0.154,0.745,0.157 Q0.747,0.159,0.75,0.159 Q0.754,0.158,0.759,0.156 Q0.769,0.152,0.78,0.146 Q0.783,0.144,0.786,0.142 A0.001,0.001,-16.5,0,0,0.787,0.141 L0.785,0.12 Q0.785,0.119,0.786,0.119 Q0.792,0.12,0.798,0.121 C0.801,0.122,0.802,0.114,0.807,0.116 Q0.81,0.118,0.813,0.12 A0.002,0.002,36.6,0,0,0.815,0.12 C0.817,0.117,0.819,0.115,0.822,0.116 C0.84,0.121,0.859,0.121,0.877,0.121 Q0.896,0.121,0.914,0.121 Q0.922,0.12,0.928,0.12 Q0.96,0.121,0.996,0.121 Q0.997,0.121,0.997,0.122 L0.999,0.138 Q0.999,0.138,0.998,0.138 C0.998,0.139,0.997,0.14,0.997,0.14 Q0.996,0.143,0.997,0.146 C0.998,0.151,0.999,0.155,1,0.161">
                    </path>
                </clipPath>
            </svg>
            <div id='map' style='width: 900px; height: 700px' class="clipped"></div>

        </div>
        <ul class="mt-10 font-semibold text-lg flex flex-col gap-2 md:hidden" id="location-list">
            <li class="px-4 py-2 rounded-full " data-title="Craigieburn" data-phone="(03) 9021 8928" data-address="31 Craigieburn Road, Craigieburn" data-email="info@DentalOne">Craigieburn</li>
            <li class="px-4 py-2 rounded-full" data-title="Lower Templestowe" data-phone="(03) 9581 2628" data-address="275 Manningham Road Lower Templestowe, VIC 3107" data-email="info@DentalOne">Lower
                Templestowe</li>
            <li class="px-4 py-2 rounded-full" data-title="Epping" data-phone="(03) 9039 6597" data-address="1/341 Harvest Home Road, Epping VIC 3076" data-email="info@DentalOne">Epping North
            </li>
            <li class="px-4 py-2 rounded-full" data-title="Essendon" data-phone="(03) 9969 2841" data-address="Level 1, 1003 Mt Alexander Rd, Essendon" data-email="info@DentalOne">Essendon</li>
            <li class="px-4 py-2 rounded-full" data-title="Richmond" data-phone="(03) 9113 9313" data-address="Inside Medical One Victoria Gardens Shopping Centre, Level 1, 620 Victoria Street Richmond VIC 3121" data-email="info@DentalOne">Richmond</li>
            <li class="px-4 py-2 rounded-full" data-title="Reservoir" data-phone="(03) 9059 4045" data-address="319 Spring St, Reservoir VIC 3073" data-email="info@DentalOne">Reservoir</li>
        </ul>
        <div class="grid grid-cols-5 gap-4 bg-white shadow p-4 rounded-xl items-center mt-8 " id="location-details">
            <div class="col-span-2 h-full">
                <img src="/wp-content/themes/dental1/theme/assets/images/craigieburn.jpg" class="rounded-lg border-2 border-white shadow h-full object-cover" />
            </div>
            <div class="col-span-3">
                <h4 class="mb-2 wrap" id="location-title">Dental one in Craigieburn</h4>
                <a href="#" class="text-sm flex gap-4 items-center text-gray-500 hover:text-primary" id="location-phone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-1 text-primary">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.970c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                    </svg>
                    <span id="phone-text">(03) 9021 8928</span>
                </a>
                <a href="#" class="text-sm flex gap-4 items-center text-gray-500 hover:text-primary" id="location-email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 h-4 mt-1 text-primary">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                    <span id="email-text">info@DentalOne</span>
                </a>
                <div class="text-sm text-gra 46 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>

                <p class="text-sm text-gray-600 grow-0"> <span id="address-text">31 Craigieburn Road, Craigieburn
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-center mt-12">
        <a href="/contact" class="button secondary ">Contact Us</a>
        <a href="/book-appointment" class="button primary">Book
            Online</a>
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