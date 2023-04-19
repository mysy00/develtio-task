<?php get_header();?>

<div class="relative">

	<section class="container pt-20 pb-20">
		<?php 
			if (strlen(carbon_get_theme_option("content_background_image")) != 0) {
				echo wp_get_attachment_image( carbon_get_theme_option("content_background_image"), "full", "", ["class" => "hidden lg:block absolute max-h-full right-0 bottom-0 pointer-events-none -z-0", "loading" => "auto"]);
			}
			else {
				echo '<img class="hidden lg:block absolute max-h-full right-0 bottom-0 pointer-events-none -z-0" src="'.esc_url( get_theme_file_uri( 'resources/images/house.png' ) ).'" alt>';
			}
		?>
		<article class="max-w-3xl relative z-0">
			<header class="text-primary">
				<h2 class="text-4xl sm:text-6xl">Ubezpieczenia majątkowe</h2>
				<p class="font-display mt-3 text-2xl sm:text-4xl font-bold">Co obejmują?</p>
			</header>
			<div class="leading-relaxed mt-6">
				<p>
					<strong>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
						dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
					</strong>
				</p>
				<p class="mt-3">
					Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
					consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
					sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
					takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
				</p>
			</div>
			<a href="#" class="mt-12 btn btn--primary">Zamów ubezpieczenie</a>

		</article>
	</section>

</div>

<?php
get_footer();