<?php
/**
 * Title: Hero
 * Slug: trevor/banner-hero
 * Categories: banner, featured
 * Keywords: hero banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"565px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","fontSize":"x-large","level":1} -->
		<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">Where Every Pixel Tells a Story of Your brand's Unique Identity</h1>
		<!-- /wp:heading -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Unveiling the Extraordinary in Every Detail of Your brand's Narrative. Join Us in Shaping Your brand's Visual Triumph</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"1.25rem"} -->
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button">About us</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer">
	</div>
	<!-- /wp:spacer -->

	<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image alignwide size-full is-style-rounded">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-hero.webp" alt="<?php esc_attr_e( 'High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'trevor' ); ?>" />
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
