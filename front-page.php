<?php
/**
* Page
*
* Theme Front Page
*
* @since   1.0.0
* @package WP
*/

get_header(); ?>
<?php if ( have_rows( 'masthead' ) ) : ?>
	<?php while ( have_rows( 'masthead' ) ) : the_row(); ?>
	<section id="masthead" style="background: linear-gradient(270deg, rgba(25, 28, 32, 0) 0%, #191C20 100%), url(<?php the_sub_field('background');?>);">
	<div class='container'>
		<div class="row">
			<div class="col-12 col-lg-12 col-xl-9 col-md-10">
			<?php the_sub_field( 'logo' ); ?>
				<div class="text">
					<!-- <div class='subtitle'>
							<?php the_sub_field( 'subtitle' ); ?>
					</div> -->
					<div class='title'>
						<?php the_sub_field( 'title' ); ?>
					</div>
					<div class="text">
						<?php the_sub_field( 'text' ); ?>
					</div>

					<div class="covid_button">
						<?php $button_link = get_sub_field( 'button_link' ); ?>
							<?php if ( $button_link ) : ?>
								<a class='btn red' href="#response"> <img class='white_circle' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_circle.svg" /> <?php the_sub_field( 'button_text' ); ?> <img class='white_arrow' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_arrow.svg" /></a>
							<?php endif; ?>
					</div>							
				</div>
			</div>
		</div>
	</div>
		<!-- <?php $image = get_sub_field( 'image' ); ?>
		<?php if ( $image ) : ?>
			<img class="picture" src="<?php the_sub_field( 'image' ); ?>" />		
			<?php endif; ?> -->
	</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'services' ) ) : ?>
	<?php while ( have_rows( 'services' ) ) : the_row(); ?>
	<section id="services" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service_background3.png')">
		<div class='container'>
			<div class='row'>
				<div class="col-12 text-center">
					<div class='subtitle'>
						<?php the_sub_field( 'subtitle' ); ?>
					</div>
					<div class="title">
						<?php the_sub_field( 'title' ); ?>
					</div>
				</div>
			</div>
			<div class='row'>
				<?php if ( have_rows( 'blocks' ) ) : ?>
					<?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
						<div class="col-12 col-lg-6 col-xl-4 col-md-6">
							<div class="card">
								<div class="icon">
								<?php if ( get_sub_field( 'icon' ) ) : ?>
									<img class='service_icon' src="<?php the_sub_field( 'icon' ); ?>" />
								<?php endif ?>
								</div>
								<div class="card-title">
									<?php the_sub_field( 'title' ); ?>
								</div>
								<div class="card-text">
									<?php the_sub_field( 'text' ); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
								</div>
					<div class='row'>
						<div class="col-12 text-center ending">
							<div class="ending_text">
							<?php the_sub_field( 'tab_text' ); ?>
								</div>
								<div class="btn_green">
									<a class='btn green' href="#response"> Get In Touch <img class='green_white_arrow' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_arrow.svg" /></a>
								</div>
							</div>
					</div>
				</div>
				<?php else : ?>


					<?php // no rows found ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'values' ) ) : ?>
	<?php while ( have_rows( 'values' ) ) : the_row(); ?>
	<section id="values" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/values_background.svg')">
		<div class='container card'>
			<div class="row">
				<div class="col-12 text-left">
					<div class="subtitle">
						<?php the_sub_field( 'subtitle' ); ?>
					</div>
					<div class="title">
						<?php the_sub_field( 'title' ); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if ( have_rows( 'blocks' ) ) : ?>
				<?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
					<div class="col-12 col-lg-6 col-xl-4 col-md-6">
						<div class="values-content">
							<div class="icon">
								<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) : ?>
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									<?php endif; ?>
							</div>
								<div class="value-title">
									<?php the_sub_field( 'title' ); ?>
								</div>
								<div class="value-text">
									<?php the_sub_field( 'text' ); ?>		
								</div>
						</div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php if ( get_sub_field( 'background' ) ) : ?>
			<img src="<?php the_sub_field( 'background' ); ?>" />
				<?php endif ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>
			</div>
			<div class="row justify-content-center">
				<div class="value_quote">
					<div class="quote">
						<?php the_sub_field( 'quote' ); ?>
					</div>
					<div class="exp">
						<?php the_sub_field( 'explanation' ); ?>
					</div>
					<div class="author">
						<?php the_sub_field( 'author' ); ?>
					</div>
				</div>
			</div>

		</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'partner_process' ) ) : ?>
	<?php while ( have_rows( 'partner_process' ) ) : the_row(); ?>
	<section id="partner_process" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pp_background.svg')">
	<div class='container'>
			<div class="row">
				<div class="col-12 text-center">
					<div class='pp_sub'>
						<?php the_sub_field( 'subtitle' ); ?>
					</div>
					<div class="pp_title">
						<?php the_sub_field( 'title' ); ?>
					</div>
				</div>
					<div class="progress-container">
						<div class="progress-bar" id="myBar">
							<!-- <div class="progress_circle" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/progress_circle.svg')"></div> -->
						</div>
					</div>
				<?php if ( have_rows( 'steps' ) ) : ?>
					<?php $i=0; ?> 
				<?php while ( have_rows( 'steps' ) ) : the_row(); $i++; ?>
				<div class="row justify-content-center row_pp <?php the_sub_field( 'image_position' ); ?>">
					<div class="col-12 col-lg-6 col-xl-6 image <?php if ($i==1): echo 'one'; endif; ?>" >
						<?php if(get_sub_field('image_position') === 'left'):?>
							<div class="dots" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dots-red.svg')"></div>
						<?php else: ?>
							<div class="dots" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dots-green.svg')"></div>
						<?php endif; ?>
							<?php $image = get_sub_field( 'image' ); ?>
								<?php if ( $image ) : ?>
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								<?php endif; ?>
					</div>
					<!-- <div class="scrolling-section">
  						<div id="scrollbar"><div id="bar"></div></div>
  							<div class="indicator">
        						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          						<path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z" /></svg>
								  </div>
								  <script>

									  
								  </script>
						</div> -->
					<div class="col-12 col-lg-6">
						<div class="text_proc">
							<div class="icon">
							<?php $icon = get_sub_field( 'icon' ); ?>
									<?php if ( $icon ) : ?>
										<img class='PP_icon' src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<?php endif; ?>
							</div>
							<div class="title">
								<?php the_sub_field( 'title' ); ?>
							</div>
							<div class="sub">
								<?php the_sub_field( 'text' ); ?>
							</div>

						</div>
						<div class="number">
								<?php echo $i; ?>
							</div>
						</div>

				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'response' ) ) : ?>
	<?php while ( have_rows( 'response' ) ) : the_row(); ?>
	<section id="response"style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/covid_background.svg')">
		<div class="container-fluid">
			<div class="row justify-content-center ">
			<!-- <div class="col-12 col-lg-5 col-md-4 image">
					<div class="response-image">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php endif; ?>
					</div>
				</div>
				<div class="col-12 col-lg-7 text-left text">
					<div class="our-covid-19-respons">
						<div class="response_line"></div>
						<div class="circle" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/covid_line.svg')"></div>
						<div class="covid_sub">
							<?php the_sub_field( 'subtitle' ); ?>	
						</div>
					</div>
					<div class="the-world-is-not-cha">
						<?php the_sub_field( 'title' ); ?>
					</div>
					<div class="over-the-past-few-de">
						<?php the_sub_field( 'text' ); ?>
					</div>
				</div> -->
				<div class="col-12 col-lg-10">
					<div class="card">
						<div class="response-image">
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
						</div>
					<div class="text">
						<div class="our-covid-19-respons">
							<div class="response_line"></div>
							<div class="circle" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/covid_line.svg')"></div>
							<div class="covid_sub">
								<?php the_sub_field( 'subtitle' ); ?>	
							</div>
						</div>
						<div class="the-world-is-not-cha">
							<?php the_sub_field( 'title' ); ?>
						</div>
						<div class="over-the-past-few-de">
							<?php the_sub_field( 'text' ); ?>
						</div>
					</div>
					</div>
					</div>
					<!-- <?php $background = get_sub_field( 'background' ); ?>
		<?php if ( $background ) : ?>
			<img src="<?php echo esc_url( $background['url'] ); ?>" alt="<?php echo esc_attr( $background['alt'] ); ?>" />
		<?php endif; ?> -->
				</div>
		</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'contact' ) ) : ?>
	<?php while ( have_rows( 'contact' ) ) : the_row(); ?>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 col-md-6">
						<div class="text">
							<div class='subtitles'>
								CONTACT
							</div>
							<div class='as-canadas-fastest'>
								<?php the_sub_field( 'title' ); ?>
							</div>
							<div class="get-in-touch">
								<?php the_sub_field( 'text' ); ?>
							</div>
							<div class="phone">
								<img class='white_circle' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone.svg" />
								<?php the_sub_field( 'phone' ); ?>
							</div>
							<div class="location">
								<img class='white_circle' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location.svg" />
								<div class="text">
									<?php the_sub_field( 'location' ); ?>
								</div>
							</div>
							</div>
					</div>
				<div class="col-12 col-lg-6 col-md-6 form">
					<?php echo do_shortcode(get_sub_field( 'form_short_code' )); ?>
				</div>
			</div>
		</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
