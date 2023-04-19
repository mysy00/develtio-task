</main>

<?php do_action('develtio_content_end');?>

</div>

<?php do_action('develtio_content_after');?>

<footer id="colophon" class="site-footer bg-primary text-white py-12" role="contentinfo">
	<?php do_action('develtio_footer');?>

	<div class="container grid gap-8 lg:grid-cols-4 grid-cols-2">
		<div>
			<h3 class="text-lg">O nas</h3>
			<?php
			wp_nav_menu(
					array(
							'menu' => 'Footer menu',
							'container_id' => 'footer-menu',
							'container_class' => '',
							'menu_class' => 'flex flex-col gap-2 mt-4',
							'theme_location' => 'footer',
							'li_class_0' => 'hover:text-secondary transition-colors',
							'submenu_class' => 'hidden',
							'fallback_cb' => false,
					)
			);
			?>
		</div>

		<div>
			<h3 class="text-lg capitalize">Ubezpieczenia</h3>
			<div class="flex flex-col gap-2 mt-4">
				<a class="hover:text-secondary transition-colors" href="#">Ubezpieczenia mienia, nieruchomości</a>
				<a class="hover:text-secondary transition-colors" href="#">Ubezpieczenia osobowe</a>
				<a class="hover:text-secondary transition-colors" href="#">Ubezpieczenia rolne</a>
				<a class="hover:text-secondary transition-colors" href="#">Ubezpieczenie OC</a>
				<a class="hover:text-secondary transition-colors" href="#">Zobacz pełną ofertę</a>
			</div>
		</div>

		<div>
			<h3 class="text-lg capitalize">Pomoc</h3>
			<div class="flex flex-col gap-2 mt-4">
				<a class="hover:text-secondary transition-colors" href="#">Oddziały/Kontakt</a>
				<a class="hover:text-secondary transition-colors" href="#">Towarzystwa ubezpieczeniowe</a>
				<a class="hover:text-secondary transition-colors" href="#">Oddziały</a>
				<a class="hover:text-secondary transition-colors" href="#">Kontakt</a>
				<a class="hover:text-secondary transition-colors" href="#">Polityka</a>
			</div>
		</div>

		<div>
			<h3 class="text-lg">Infolinia</h3>
			<div class="mt-4">
				<a class="text-secondary text-lg sm:text-2xl p-2 rounded-lg hover:bg-secondary hover:text-primary transition-all"
					href="tel:48223111234">+48 22 311 1234</a>
			</div>
		</div>
	</div>

</footer>

</div>

<?php wp_footer();?>

</body>

</html>