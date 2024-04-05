<?php

/**
 * Title: Contact Banner
 * Slug: trevor/banner-contact
 * Categories: contact, banner, featured
 * Keywords: contact, contact us
 * Viewport width: 1200
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-horizon-skyline.webp","hasParallax":true,"dimRatio":30,"overlayColor":"dark-gray","contentPosition":"center center","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}},"heading":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax has-white-color has-text-color has-link-color">
    <span aria-hidden="true" class="wp-block-cover__background has-dark-gray-background-color has-background-dim-30 has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-horizon-skyline.webp)"></div>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size">Get in touch</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading -->
                    <h2 class="wp-block-heading">We'd love to hear from you.</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size">Whether you have questions about our services, need assistance, or simply want to say hello, please don't hesitate to get in touch with us.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button">Let’s chat</a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
                <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Contact Us</h3>
                        <!-- /wp:heading -->

                        <!-- wp:separator {"className":"is-style-wide"} -->
                        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
                        <!-- /wp:separator -->

                        <!-- wp:paragraph -->
                        <p><strong>Phone</strong><br><a href="tel:123-456-7890">123.456.7890</a></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:separator {"className":"is-style-wide"} -->
                        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
                        <!-- /wp:separator -->

                        <!-- wp:paragraph -->
                        <p><strong>Email</strong><br><a href="mailto:example@example.com" target="_blank" rel="noreferrer noopener">example@example.com</a></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:separator {"className":"is-style-wide"} -->
                        <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
                        <!-- /wp:separator -->

                        <!-- wp:paragraph -->
                        <p><strong>Address</strong><br>123 Main Street<br>Your City, State, ZIP Code</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"size":"has-normal-icon-size","className":"is-style-default"} -->
                        <ul class="wp-block-social-links has-normal-icon-size is-style-default">
                            <!-- wp:social-link {"url":"https://www.x.com/","service":"x"} /-->
                            <!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
                            <!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->
                            <!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->

                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->