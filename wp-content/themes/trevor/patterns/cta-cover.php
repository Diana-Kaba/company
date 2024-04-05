<?php
/**
 * Title: Call to Action Cover
 * Slug: trevor/cta-cover
 * Categories: call-to-action
 * Keywords: CTA, landing, button
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-rock-mountain.webp","dimRatio":50,"gradient":"midnight","align":"wide","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignwide" style="border-radius:20px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-midnight-gradient-background"></span>
        <img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-rock-mountain.webp" alt="<?php esc_attr_e( 'High-resolution photo of mountain', 'trevor' ); ?>" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Empowering Success Across Industries</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Be part of our success story! Join the extensive network of clients who have entrusted us with their vision, and let\'s create brilliance together.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
                <!-- wp:columns {"verticalAlignment":"center"} -->
                <div class="wp-block-columns are-vertically-aligned-center">
                    <!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
                        <!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray","fontSize":"medium","fontFamily":"sans-serif"} -->
                        <h3 class="wp-block-heading has-text-align-left has-dark-gray-color has-text-color has-link-color has-sans-serif-font-family has-medium-font-size">Join Our Design Revolution</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} -->
                    <div class="wp-block-column is-vertically-aligned-center">
                        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"width":100,"className":"is-style-fill"} -->
                            <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">Contact Us</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->