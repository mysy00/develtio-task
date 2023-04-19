<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'develtio_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'develtio_header' ); ?>


	<header id="header">
			<div class="container mb-4 mx-auto">
				<div class="xl:flex items-stretch relative xl:justify-between">
					<div class="flex justify-between items-center xl:items-stretch">
						<div class="xl:absolute bottom-0 z-10 left-0">
							<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
							<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo( 'name' ); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo( 'description' ); ?>
								</p>
							<?php } ?>
						</div>

						<div class="xl:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path
												d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden mt-4 p-4 xl:mt-0 xl:p-0 xl:bg-transparent xl:block',
							'menu_class'      => 'xl:flex',
							'theme_location'  => 'primary',
							'li_class'        => 'relative text-primary font-medium text-2xl lowercase',
							'li_class_0'      => 'xl:mx-4 xl:relative group py-6',
							'submenu_class'   => 'hidden',
							'fallback_cb'     => false,
						)
					);
				?>
				</div>
			</div>
		</header>

	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			<div class="max-w-[1920px] mx-auto">
				<div class="relative bg-hero">
					<!-- <img src="<?php echo esc_url( get_theme_file_uri( 'resources/images/family.png' ) ); ?>" alt /> -->
					<section class="justify-center xl:grid xl:grid-cols-2 py-16 relative">
							<div class="font-display self-end bg-primary/70 w-full -z-1 xl:absolute bottom-0 py-12">
								<div class="container">
									<h2 class="text-secondary text-5xl font-bold">
										Ubezpieczenie majątkowe
									</h2>
									<p class="text-white text-4xl font-bold max-w-xl">
										Skontaktuj się z nami i skorzystaj ze specjalnej oferty!
									</p>
								</div>
							</div>

							<form class="xl:col-start-2 sm:mx-auto mt-10 mx-4 rounded-md bg-white relative z-0 p-10 max-w-[489px]">
								<p class="text-2xl font-display font-bold text-primary">Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</p>
								<input type="text" class="px-4 py-2 mt-4 border w-full" placeholder="Imię i nazwisko" />
								<input type="email" class="px-4 py-2 mt-4 border w-full" placeholder="Adres e-mail" />
								<input type="tel" class="px-4 py-2 mt-4 border w-full" placeholder="Numer telefonu" />
								<div class="flex gap-4 flex-grow-0">
									<input type="text" class="min-w-0 px-4 py-2 mt-4 border" placeholder="Miejscowość" />
									<input type="text" class="min-w-0 px-4 py-2 mt-4 border" placeholder="Kod pocztowy" />
								</div>
								<div class="flex gap-3 mt-4">
									<div>
										<input type="checkbox" id="data-agreement" />
									</div>
									<label class="text-sm text-gray-500" for="data-agreement">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label>
								</div>
								<div class="mt-4 text-center">
									<input type="submit" class="rounded-md bg-secondary text-white px-12 py-2 cursor-pointer hover:bg-white border hover:border-secondary hover:text-secondary transition-all">
								</div>
							</form>
						</div>
				</div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'develtio_content_start' ); ?>

		<main>
