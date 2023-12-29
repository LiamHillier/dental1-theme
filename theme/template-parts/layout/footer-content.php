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
		<div class="logo h-20 flex justify-center mb-6">
			<?php echo $logo; ?>
		</div>
		<div class="px-5 lg:max-w-xs mx-auto">
			<p class="text-center">We are more than just a dental practice. We are your trusted partner in achieving and
				maintaining a beautiful, healty smile. </p>
		</div>

		<div class="flex justify-center items-center my-6 gap-4 lg:mt-16">
			<a href="https://www.facebook.com/dentalonecraigieburn/"> <?php echo $facebook; ?></a>
			<a href="https://www.instagram.com/dentalonegroup/"> <?php echo $instagram; ?></a>
		</div>
	</div>


	<div class="p5-8 grid grid-cols-2 divide-x gap-y-10 justify-center md:grid-cols-6 max-w-screen-2xl mx-auto md:px-20">
		<div class="justify-self-end pr-8 w-[125px] md:w-full">
			<p class="text-lg text-black mb-4">Quick links</p>
			<ul class="text-gray-500 flex flex-col gap-2">
				<li>Home</li>
				<li>About Us</li>
				<li>Services</li>
				<li>Locations</li>
				<li>Contact</li>
			</ul>
		</div>
		<div class="pl-8 w-[125px] md:w-full">
			<p class="text-lg text-black mb-4">Company</p>
			<ul class="text-gray-500 flex flex-col gap-2">
				<li>Home</li>
				<li>About Us</li>
				<li>Services</li>
				<li>Locations</li>
				<li>Contact</li>
			</ul>
		</div>
		<div class="hidden md:block"></div>
		<div class="hidden md:block border-none"></div>
		<div class="justify-self-end pr-8 border-l-0  w-[125px]  md:w-full md:!border-l md:pl-8">
			<p class="text-lg text-black mb-4">Legal</p>
			<ul class="text-gray-500 flex flex-col gap-2">
				<li>Home</li>
				<li>About Us</li>
				<li>Services</li>
				<li>Locations</li>
				<li>Contact</li>
			</ul>
		</div>
		<div class="pl-8 w-[125px]  md:w-full">
			<p class="text-lg text-black mb-4">Contact</p>
			<ul class="text-gray-500 flex flex-col gap-2">
				<li>Home</li>
				<li>About Us</li>
				<li>Services</li>
				<li>Locations</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>

	<div class="mt-16">
		<p class="text-sm text-black text-center">Copyright &copy; <?php echo date("Y"); ?> Dental One. All Rights
			Reserved.</p>
	</div>

</footer><!-- #colophon -->