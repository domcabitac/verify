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
	<section id="masthead" style="background: linear-gradient(270deg, rgba(25, 28, 32, 0) 0%, #191C20 100%), url(<?php the_sub_field('background');?>); 	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;">
	<div class='container'>
		<div class="row justify-content-between align-items-center">
			<div class="col-10 col-lg-12 col-xl-9 col-md-10">
			<?php the_sub_field( 'logo' ); ?>
				<div class="text">
					<div class='title'>
						<?php the_sub_field( 'title' ); ?>
					</div>
					<div class="text">
						<?php the_sub_field( 'text' ); ?>
					</div>
					<div class="covid_button">
						<?php $button_link = get_sub_field( 'button_link' ); ?>
							<?php if ( $button_link ) : ?>
								<a class='btn red' href="#response"> 
									<div class="ring-container">
									<div class="ringring"></div>
									<div class="circle"></div>
									</div>
								<div class="button_text">
									<?php the_sub_field( 'button_text' ); ?>
								</div>
 								<img class='white_arrow' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_arrow.svg" /></a>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'services' ) ) : ?>
	<?php while ( have_rows( 'services' ) ) : the_row(); ?>
	<section id="services" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service_background4.png')">
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
							<div class="row text-center justify-content-center">
							<div class="icon">
								<?php if ( get_sub_field( 'icon' ) ) : ?>
									<img class='service_icon' src="<?php the_sub_field( 'icon' ); ?>" />
								<?php endif ?>
								</div>
							</div>

								<div class="row text-center justify-content-center">
									<div class="card-title">
										<?php the_sub_field( 'title' ); ?>
									</div>
								</div>
								<div class="row">
								<div class="card-text">
									<?php the_sub_field( 'text' ); ?>
								</div>
							</div>

							</div>
						</div>
					<?php endwhile; ?>
								</div>
								<?php else : ?>


<?php // no rows found ?>
<?php endif; ?>
					<div class='row'>
						<div class="col-12 text-center ending">
							<div class="ending_text">
							<?php the_sub_field( 'text' ); ?>
								</div>
								<div class="btn_green">
									<a class='btn green' href="#contact"> Get In Touch <img class='green_white_arrow' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white_arrow.svg" /></a>
								</div>
							</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'values' ) ) : ?>
	<?php while ( have_rows( 'values' ) ) : the_row(); ?>
	<section id="values">
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
					<div class="col-12 col-lg-10 col-xl-4 col-sm-12">
						<div class="values-content">
							<div class="icon">
								<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) : ?>
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									<?php endif; ?>
							</div>
							<div class="text">
							<div class="value-title">
									<?php the_sub_field( 'title' ); ?>
								</div>
								<div class="value-text">
									<?php the_sub_field( 'text' ); ?>		
								</div>
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
			<?php if ( get_sub_field( 'toggle_switch' ) == 1 ) : ?>
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
				</div>			<?php else : ?>

			<?php endif; ?>


		</div>
		<div class="dark_background"></div>

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
</div>
					<div class="progress-container">
						<div class="progress-bar" id="myBar">
						</div>
						<!-- <svg id="svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 600 1200">
							<path class="line01 line" d="M 300,0
									L 300 230 
									L 300 750
									L 300 850
									L 300 1200" ></path>
							<path class="theGreenLine" 
									d="M 300,0
									L 300 230 
									L 300 750
									L 300 850
									L 300 1200"
									fill="none" stroke="green" stroke-width="10px" />
							<circle class="ball ball01" cx="25" cy="25"></circle>
						</svg> -->
						<!-- <div style="position:sticky; top:0; left:0px; right:0; bottom:0 ;width:100%; height:0; background:url('background-map.jpg') no-repeat;" id="route">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="svgRoute">
							<line id="underlay"
							x1="50" 
							y1="0" 
							x2="50" 
							y2="100" 
							stroke="#aaa"
							fill="none"
							/>
							<line id="path"
							x1="50" 
							y1="0" 
							x2="50" 
							y2="100" 
							stroke="#35ad68"
							fill="none"
							/>
		
		<circle r="1" id="dot" cy="0" cx="0"  fill="#35ad68" fill-opacity=".96" fill-rule="evenodd" stroke="#35ad68" stroke-width=".25"/>

    
	</svg>   -->
</div>
					<!-- </div> -->
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
					<div class="col-12 col-lg-6">
						<div class="text_proc">
						<div class="process_header">
							<div class="icon">
								<?php $icon = get_sub_field( 'icon' ); ?>
										<?php if ( $icon ) : ?>
											<img class='PP_icon' src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
										<?php endif; ?>
								</div>
								<div class="num_mobile">
								<?php 
										if($i ==1){
											echo 'Step One';
										} elseif($i ==2){
											echo 'Step Two';

										} elseif($i ==3){
											echo 'Step Three';
										} elseif($i==4){
											echo 'Step Four';
										} ?>
								</div>
								<div class="title">
									<?php the_sub_field( 'title' ); ?>
								</div>
						</div>
	
							<div class="sub">
								<?php the_sub_field( 'text' ); ?>
							</div>

						</div>
						<div class="number">
							<?php echo $i;?>
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
	<section id="response">
		<div class="container-fluid">
			<div class="row justify-content-center ">
				<div class="col-12 col-md-12 col-sm-12 col-xs-12 align-items-center">
					<div class="card">
						<div class="response-image">
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
						</div>
					<div class="text">
							<div class="ring-container">
								<div class="ringring"></div>
								<div class="circle"></div>
							</div>
							<div class="covid_sub">
						<div class="our-covid-19-respons">
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
		<div class="orange_background"></div>
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