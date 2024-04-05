<?php

/**
 * Title: About with cascade gallery
 * Slug: trevor/text-cascade-gallery
 * Categories: banner, about, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgba(0,0,0,0) 45%,rgba(255,128,0,0.06) 45%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background:linear-gradient(90deg,rgba(0,0,0,0) 45%,rgba(255,128,0,0.06) 45%)">
    <!-- wp:group {"align":"wide","style":{"border":{"radius":[]}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"3em"}}}} -->
        <div class="wp-block-columns" style="margin-bottom:3em">
            <!-- wp:column {"width":"75%"} -->
            <div class="wp-block-column" style="flex-basis:75%">
                <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                <h2 class="wp-block-heading" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">— About Us</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Where Innovation Meets Excellence!</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":""} -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":null,"topRight":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-architecture.webp" alt="<?php esc_attr_e('High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'trevor'); ?>" />
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-hero.webp" alt="<?php esc_attr_e('High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'trevor'); ?>" />
                </figure>
                <!-- /wp:image -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"40%"} -->
                    <div class="wp-block-column" style="flex-basis:40%">
                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":null,"topRight":null,"bottomRight":null}}}} -->
                        <figure class="wp-block-image size-full">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-rock-mountain.webp" alt="<?php esc_attr_e('High-resolution photo of mountain', 'trevor'); ?>" />
                        </figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"bottom":"5%","left":"5%"}}}} -->
                    <div class="wp-block-column" style="padding-bottom:5%;padding-left:5%;flex-basis:60%">
                        <!-- wp:paragraph -->
                        <p>We are dedicated to crafting a unique blend of innovation, expertise, and unwavering commitment to deliver unparalleled solutions. Our journey began with a vision to redefine industry standards and create a lasting impact on the world.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph -->
                        <p><a href="#0">Show Me More →</a></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->