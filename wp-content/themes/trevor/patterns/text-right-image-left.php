<?php

/**
 * Title: Image on left with Title text and progress on right
 * Slug: trevor/text-right-image-left
 * Categories: banner, about, featured
 * Viewport width: 1200
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <figure class="wp-block-image size-large is-style-rounded">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-architecture.webp" alt="<?php esc_attr_e('High-resolution photo of architecture, sky, window, glass, building, city, skyscraper', 'trevor'); ?>" style="aspect-ratio:3/4;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"style":{"typography":"fontSize":"small","fontFamily":"sans-serif"} -->
                <h2 class="wp-block-heading has-sans-serif-font-family has-small-font-size">Professional Expertise</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"serif"} -->
                <p class="has-serif-font-family has-x-large-font-size" style="line-height:1.2">Our Awesome Skills</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"constrained","contentSize":"450px","justifyContent":"left"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
                    <p>Uncover the diverse skill set that powers our success. Click below to learn more about the professional expertise that sets us apart and propels us toward excellence.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore Now</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->


                <!-- wp:spacer {"height":"20px"} -->
                <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">Innovative Thinking</h6>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">50%</h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"dark-gray","textColor":"dark-gray","width":50,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"typography":{"fontSize":"1px"},"border":{"radius":"0px"}}} -->
                            <div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size" style="font-size:1px"><a class="wp-block-button__link has-dark-gray-color has-dark-gray-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px">.</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->


                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">Technical Proficiency</h6>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">75%</h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"dark-gray","textColor":"dark-gray","width":75,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"typography":{"fontSize":"1px"},"border":{"radius":"0px"}}} -->
                            <div class="wp-block-button has-custom-width wp-block-button__width-75 has-custom-font-size" style="font-size:1px"><a class="wp-block-button__link has-dark-gray-color has-dark-gray-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px">.</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">Problem-Solving Acumen</h6>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">100%</h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"dark-gray","textColor":"dark-gray","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"typography":{"fontSize":"1px"},"border":{"radius":"0px"}}} -->
                            <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size" style="font-size:1px"><a class="wp-block-button__link has-dark-gray-color has-dark-gray-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px">.</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">Responsible and Accountable</h6>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":6} -->
                        <h6 class="wp-block-heading">100%</h6>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"backgroundColor":"gray","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"dark-gray","textColor":"dark-gray","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"typography":{"fontSize":"1px"},"border":{"radius":"0px"}}} -->
                            <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size" style="font-size:1px"><a class="wp-block-button__link has-dark-gray-color has-dark-gray-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px">.</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->