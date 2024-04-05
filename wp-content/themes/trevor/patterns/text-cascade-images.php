<?php

/**
 * Title: About Showcase with images
 * Slug: trevor/text-cascade-images
 * Categories: banner, about, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
            <p>Architecture</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">Our Latest Projects</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
            <p style="margin-top:0px">Our mission is to craft spaces that transcend the ordinary and leave a lasting imprint on the built environment.</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"50px"}} -->
            <div class="wp-block-group"><!-- wp:separator -->
                <hr class="wp-block-separator has-alpha-channel-opacity" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
            <p>From conceptualization to realization, we offer comprehensive architectural design services that cater to diverse needs.</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"10px"} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/architecture-window-building.webp" alt="<?php esc_attr_e('High-resolution photo of architecture window building wall downtown sign', 'trevor'); ?>" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-architecture.webp" alt="<?php esc_attr_e('High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'trevor'); ?>" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:paragraph -->
            <p>Our expertise extends to mixed-use developments, revitalization projects, and cityscape transformations.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->