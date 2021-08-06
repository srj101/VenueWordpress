<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title('|',true,'right'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Venue">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#">
								<div>The Venue</div>
								<div>restaurant</div>
							</a>
						</div>
						<nav class="main_nav" aria-label="<?php esc_attr_e( 'Main Menu', 'venue' ); ?>">

						
							
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main_menu',
										'menu_class'     => 'd-flex flex-row align-items-center justify-content-start',
										'depth'          => 1,
										'fallback_cb'    => 'venue_default_main_menu'
									)
								);
							?>

						
						</nav>
						<div class="reservations_phone ml-auto">Reservations: +8801616346835</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		
		<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main_menu',
										'menu_class'     => '',
										'depth'          => 1,
										'fallback_cb'    => 'venue_default_main_menu'
									)
								);
							?>
		</div>
		<div class="menu_reservations_phone ml-auto">Reservations: +88 01616346835</div>
	</div>
	