<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental1
 */

$logo = file_get_contents('wp-content/themes/dental1/theme/assets/logos/dental1-dark.svg');
$facebook = file_get_contents('wp-content/themes/dental1/theme/assets/icons/facebook.svg');
$instagram = file_get_contents('wp-content/themes/dental1/theme/assets/icons/instagram.svg');
?>

<div class="md:hidden fixed bottom-0 left-0 w-full bg-white text-primary px-5 py-3 z-50 shadow-xl">
	<nav>
		<ul class="flex justify-center gap-6">
			<li class="text-primary">
				<a href="/">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
						<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
					</svg>
				</a>
			</li>
			<li class="text-primary">
				<a href="/book-appointment">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
						<path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
						<path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
					</svg>
				</a>
			</li>
			<li class="text-primary">
				<a href="tel:1300066427">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
					</svg>
				</a>
			</li>
			<li class="text-primary">
				<a href="mailto:info@dental1.com">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
					</svg>
				</a>
			</li>
		</ul>
	</nav>
</div>

<footer id="colophon" class="bg-gradient-to-t from-teal-50 via-white to-white -mt-1 pt-16 pb-4">

	<div class="lg:-mb-40">
		<div class="logo h-20 flex justify-center mb-6">
			<?php echo $logo; ?>
		</div>
		<div class="px-5 lg:max-w-xs mx-auto">
			<p class="text-center">We are more than just a dental practice. We are your trusted partner in achieving and
				maintaining a beautiful, healty smile. </p>
		</div>

	</div>


	<div class="p5-8 grid sm:grid-cols-2 divide-x gap-y-10 sm:justify-center md:grid-cols-6 max-w-screen-2xl mx-auto md:px-20">
		<div class="sm:justify-self-end pl-8 sm:pl-0 pr-8 w-full">
			<p class="text-lg text-black mb-4">Quick links</p>
			<ul class="text-gray-500 flex flex-col">
				<li><a href="/">Home</a></li>
				<li><a href="/about-us/">About us</a></li>
				<li><a href="/no-gap/">No Gap</a></li>
				<li><a href="/prices/">Prices</a></li>
				<li><a href="/payment-options/">Payment Options</a></li>
				<li><a href="/meet-the-team/">Our Team</a></li>
				<li><a href="/community-support/">Community Support</a></li>
				<li><a href="/faq/">FAQs</a></li>
			</ul>
		</div>
		<div class="pl-8 :w-full">
			<p class="text-lg text-black mb-4">Services</p>
			<ul class="text-gray-500 flex flex-col">
				<li><a href="/general-dentistry/">General</a></li>
				<li><a href="/cosmetic-dentistry/">Cosmetic</a></li>
				<li><a href="/childrens-dentistry/">Children's Dentistry</a></li>
				<li><a href="/dental-implants/">Dental Implants</a></li>
				<li><a href="/dentures/">Dentures</a></li>
				<li><a href="/full-mouth-rehabilitation/">Full Mouth Rehab</a></li>
				<li><a href="/orthodontics/">Orthodontics</a></li>
				<li><a href="/veneers/">Veneers</a></li>
				<li><a href="/dental-emergencies/">Dental Emergencies</a></li>
			</ul>
		</div>
		<div class="hidden md:block"></div>
		<div class="hidden md:block border-none"></div>
		<div class="sm:justify-self-end pl-8 sm:pl-0 pr-8 border-l-0  w-full md:!border-l md:pl-8">
			<p class="text-lg text-black mb-4">Locations</p>
			<ul class="text-gray-500 flex flex-col">
				<li><a href="/locations/craigieburn/">Craigieburn</a></li>
				<li><a href="/locations/richmond">Richmond</a></li>
				<li><a href="/locations/lower-templestowe/">Lower Templestowe</a></li>
				<li><a href="/locations/epping/">Epping North</a></li>
				<li><a href="/locations/essendon/">Essendon</a></li>
				<li><a href="/locations/reservoir">Reservoir</a></li>
				<li><a href="/locations/south-yarra">South Yarra</a></li>
			</ul>
		</div>
		<div class="pl-8  w-full">
			<p class="text-lg text-black mb-4">Contact</p>
			<ul class="text-gray-500 flex flex-col">
				<li><a href="/contact/">Contact</a></li>
				<li><a href="/book-appointment">Book Appointment</a></li>
			</ul>
		</div>
	</div>

	<div class="mt-16">
		<p class="text-sm text-center">Copyright &copy; <?php echo date("Y"); ?> Dental One. All Rights
			Reserved.</p>
	</div>

</footer><!-- #colophon -->