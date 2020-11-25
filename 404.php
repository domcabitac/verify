<?php
/**
 * 404 Page
 *
 * Theme 404 Page
 *
 * @since   1.0.0
 * @package WP
 */

get_header(); ?>
<section id="not-found-page">
	<div class="container card">
        <div class="row flex-column align-items-center justify-content-center">
			<div class="numb">
				404
			</div>
        <div class="sub">Page Not Found</div>
        </div>
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="return_text">
					Try returning to the homepage to find what you're looking for.
				</div>
				<div class="home_button">
					<a class="btn error" href="<?php echo get_home_url(); ?>">Home</a> 
				</div>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>