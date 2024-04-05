<?php
/**
 * Title: Featured Centered Text, small
 * Slug: trevor/featured-centered-text-small
 * Categories: text, about
 * Keywords: mission, introduction
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large","level":1} -->
	<h1 class="wp-block-heading has-text-align-center has-serif-font-family has-x-large-font-size">
		<?php
		/* Translators: About link placeholder */
			$about_link = '<a href="#" rel="nofollow">' . esc_html__( '[Trevor]', 'trevor' ) . '</a>';
			echo sprintf(
				/* Translators: About text placeholder */
				esc_html__( 'Embark on a transformative journey with “%1$s”. We weave creativity and strategy seamlessly to elevate your brand.', 'trevor' ),
				$about_link
			);
			?>
	</h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
