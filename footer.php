<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.

wp_footer(); ?>

<footer id="footer" class=" d-lg-block">
		<div class="container-fluid">
			<div class="row foot justify-content-between">
				<div class="col-12 col-xl-5 col-lg-5 col-xs-4 align-items-start">
					© Verify 2020 | All Rights Restricted
					<div class="privacy">
						<a href='<?php echo get_site_url()?>/privacy-policy'>Privacy Policy</a>
					</div>
				</div>
				<!-- <div class='col-12 col-xl-5 col-lg-5 FC align-text-end'>
					<a href='https://revampedweb.com/' target="_blank">REVAMPED™ by Ferraz Creative</a>
				</div> -->
			</div>
		</div>
</footer>
</body>
</html>
