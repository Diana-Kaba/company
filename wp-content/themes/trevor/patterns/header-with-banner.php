<?php
/**
 * Title: Header With Banner
 * Slug: trevor/header-with-banner
 * Categories: header
 */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/banner-hero.webp' ); ?>","dimRatio":50,"align":"full","style":{"color":{"duotone":"var:preset|duotone|midnight"}},"className":"header-has-banner","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull header-has-banner">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/banner-hero.webp' ); ?>" data-object-fit="cover"/>

    <div class="wp-block-cover__inner-container">


        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
                <!-- wp:group {"align":"wide","className":"banner-header-area","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide banner-header-area">
                    <!-- wp:group {"className":"banner-header-item header-item-left","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                    <div class="wp-block-group banner-header-item header-item-left">
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"banner-header-item header-item-center","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group banner-header-item header-item-center">
                        <!-- wp:group {"className":"site-title-section"} -->
                        <div class="wp-block-group site-title-section">
                            <!-- wp:site-title {"level":0} /-->
                            <!-- wp:site-tagline /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"className":"banner-header-item header-item-right","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                    <div class="wp-block-group banner-header-item header-item-right">

                        <!-- wp:pattern {"slug":"trevor/hidden-header-woocommerce"} /-->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->


        <!-- wp:group {"className":"banner-content-area","layout":{"type":"constrained"}} -->
        <div class="wp-block-group banner-content-area">
            <!-- wp:columns {"verticalAlignment":"center","className":"header-media-content"} -->
            <div class="wp-block-columns are-vertically-aligned-center header-media-content">
                <!-- wp:column {"verticalAlignment":"center","className":"slider-content","layout":{"type":"default"}} -->
                <div class="wp-block-column is-vertically-aligned-center slider-content">
                    <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"textColor":"gray"} -->
                    <h2 class="wp-block-heading has-text-align-center has-gray-color has-text-color has-link-color">Transforming Ideas into Extraordinary Designs for Lasting Impressions</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                    <p class="has-text-align-center has-medium-font-size">Transform your vision into captivating reality. Join us for unparalleled design mastery.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button" href="#">Explore Our Portfolio</a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-bk-button-secondary is-style-fill"} -->
                        <div class="wp-block-button is-style-bk-button-secondary is-style-fill">
                            <a class="wp-block-button__link wp-element-button" href="#">Start Your Design Journey</a>
                        </div>
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