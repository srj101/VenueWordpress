<?php get_header(); ?>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/home.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">The Venue is</div>
							<div class="home_title"><h1>An Extraordinery Experience</h1></div>
							<div class="home_text ml-auto mr-auto">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll_icon"></div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content">
						<div class="intro_subtitle page_subtitle">Something new</div>
						<div class="intro_title"><h2>An Extraordinery Experience</h2></div>
						<div class="intro_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla massa.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="<?php echo get_template_directory_uri(); ?>/images/intro_1.jpg" alt="https://unsplash.com/@quanle2819"></div>
						</div>
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="<?php echo get_template_directory_uri(); ?>/images/intro_2.jpg" alt="https://unsplash.com/@fabmag"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video_section">
		<div class="background_image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/video.jpg)"></div>
		<div class="video_section_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="video_section_title">Food for the soul</div>
			<div class="video_section_icon"><a class="vimeo video_button" href="https://player.vimeo.com/video/99340873?autoplay=1&loop=1&title=0&autopause=0"><i class="fa fa-play" aria-hidden="true"></i></a></div>
		</div>
	</div>

	<!-- Signature Dish -->

	<div class="sig">
		<div class="sig_content_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="sig_content">
							<div class="sig_subtitle page_subtitle">Something new</div>
							<div class="sig_title"><h1>Our Signature Dish</h1></div>
							<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
								<div class="sig_name">Pork Tenderloin marinated in Green Pepper</div>
								<div class="sig_price ml-auto">$20</div>
							</div>
							<div class="sig_content_list">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>Pork</li>
									<li>Tenderloin</li>
									<li>Green Pepper</li>
									<li>Veggies</li>
								</ul>
							</div>
							<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sig_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5">
						<div class="sig_image">
							<div class="background_image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/sig.jpg)"></div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/sig.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Menu -->

	<div class="themenu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="themenu_title_bar_container">
						<div class="themenu_stars text-center page_subtitle">5 Stars</div>
						<div class="themenu_rating text-center">
							<div class="rating_r rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
						<div class="themenu_title_bar d-flex flex-column align-items-center justify-content-center">
							<div class="themenu_title">The Menu</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row themenu_row">

				<!-- Starters -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Starters</div>
						<div class="dish_list">

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Pork Tenderloin in Green Pepper</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Shrimp with Garlic</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Wild Mushroom with Chicken</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Oysters with Baked Potatoes</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Roast Pork</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>

				<!-- Main -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Main</div>
						<div class="dish_list">
							
							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Chicken with Lemon</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Pork Tenderloin in Green Pepper</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Shrimp with Garlic</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Wild Mushroom with Chicken</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Oysters with Baked Potatoes</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Roast Pork</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>

				<!-- Deserts -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Deserts</div>
						<div class="dish_list">

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Lava Cake</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Orange Tart</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Cheese Cake</div>
									<div class="dish_price">$20</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Chocolatte Mausse</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Ice Cream</div>
									<div class="dish_price">$17</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>Pork</li>
										<li>Tenderloin</li>
										<li>Green Pepper</li>
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>		
	</div>

	<!-- Reservations -->

	<div class="reservations text-center">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/reservations.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="reservations_content d-flex flex-column align-items-center justify-content-center">
						<div class="res_stars page_subtitle">5 Stars</div>
						<div class="res_title">Make a Reservation</div>
						<div class="res_form_container">
							<form action="#" id="res_form" class="res_form">
								<div class="d-flex flex-sm-row flex-column align-items-center justify-content-start">
									<input type="text" id="datepicker" class="res_input" required="required">
									<input type="text" class="res_input timepicker" required="required">
									<select class="res_select">
										<option disabled="" selected="">2 person</option>
										<option>3 person</option>
										<option>4 person</option>
										<option>5 person</option>
										<option>6 person</option>
									</select>
								</div>
								<button class="res_button">Make a Reservation</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

    <?php get_footer(); ?>