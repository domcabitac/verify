<?php
/**
 * Page
 *
 * Theme Page
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section id="post">
	<div class="container">
	<div class="row justify-content-center subtitle">
        	IMPORTANT
        </div>
        <div class="row justify-content-center title">
        	<?php the_title(); ?>
        </div>
		<div class="row justify-content-center policy_text">
			<div class="col-lg-10 col-xl-10 col-sm-12 col-sm-12">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php if ( have_rows( 'contact', 10) ) : ?>
	<?php while ( have_rows( 'contact', 10 ) ) : the_row(); ?>
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