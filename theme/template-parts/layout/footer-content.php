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



<footer id="colophon" class="bg-gradient-to-t from-teal-50 via-white to-white -mt-1 pt-16 pb-4">

	<div class="lg:-mb-40">
		<div class="logo h-20 flex justify-center md:mb-6">
			<?php echo $logo; ?>
		</div>
		<div class="px-5 lg:max-w-xs mx-auto">
			<p class="text-center">We are more than just a dental practice. We are your trusted partner in achieving and
				maintaining a beautiful, healty smile. </p>
		</div>

	</div>


	<div class="p5-8 grid sm:grid-cols-2 divide-x gap-y-10 sm:justify-center md:grid-cols-6 max-w-screen-2xl mx-auto mt-4 md:mt-0 md:px-20">
		<div class="sm:justify-self-end md:pr-8 w-full">
			<p class="text-lg text-black mb-4 text-center md:text-left">Quick links</p>
			<ul class="text-gray-500 flex flex-col items-center md:items-start text-center md:text-left">
				<li><a href="/">Home</a></li>
				<li><a href="/about-us/">About us</a></li>
				<li><a href="/prices/">Prices</a></li>
				<li><a href="/payment-options/">Payment Options</a></li>
				<li><a href="/meet-the-team/">Our Team</a></li>
				<li><a href="/faq/">FAQs</a></li>
			</ul>
		</div>
		<div class="md:pl-8 :w-full">
			<p class="text-lg text-black mb-4 text-center md:text-left">Services</p>
			<ul class="text-gray-500 flex flex-col items-center md:items-start text-center md:text-left">
				<li><a href="/general-dentistry/">General Dentistry</a></li>
				<li><a href="/cosmetic-dentistry/">Cosmetic Dentistry</a></li>
				<li><a href="/restorative/">Restorative Dentistry</a></li>
				<li><a href="/dental-implants/">Dental Implants</a></li>
				<li><a href="/orthodontics/">Orthodontics</a></li>
				<li><a href="/dental-emergencies/">Dental Emergencies</a></li>
			</ul>
		</div>
		<div class="hidden md:block"></div>
		<div class="hidden md:block border-none"></div>
		<div class="sm:justify-self-end md:pr-8 border-l-0  w-full md:!border-l md:pl-8">
			<p class="text-lg text-black mb-4 text-center md:text-left">Locations</p>
			<ul class="text-gray-500 flex flex-col items-center md:items-start text-center md:text-left">
				<li><a href="/locations/craigieburn/">Craigieburn</a></li>
				<li><a href="/locations/epping/">Epping North</a></li>
				<li><a href="/locations/essendon/">Essendon</a></li>
				<li><a href="/locations/lower-templestowe/">Lower Templestowe</a></li>
				<li><a href="/locations/reservoir">Reservoir</a></li>
				<li><a href="/locations/richmond">Richmond</a></li>
				<li><a href="/locations/south-yarra">South Yarra</a></li>
			</ul>
		</div>
		<div class="md:pl-8  w-full">
			<p class="text-lg text-black mb-4 text-center md:text-left">Contact</p>
			<ul class="text-gray-500 flex flex-col items-center md:items-start text-center md:text-left">
				<li><a href="/contact/">Contact</a></li>
				<li><a href="/get-a-quote/">Get a Quote</a></li>
				<li><a href="/book-appointment">Book Appointment</a></li>
			</ul>
		</div>
	</div>

	<div class="mt-16">
		<p class="text-sm text-center">Copyright &copy; <?php echo date("Y"); ?> Dental One. All Rights
			Reserved.</p>
	</div>

</footer><!-- #colophon -->