<?php

/**
 * Title: Contact
 * Slug: trevor/contact
 * Categories: contact, text, featured
 * Keywords: contact, contact us
 * Viewport width: 1200
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-teamwork.webp","hasParallax":true,"dimRatio":0,"minHeightUnit":"px","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull has-parallax">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-teamwork.webp)"></div>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"600px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
        <div class="wp-block-group alignwide" style="min-height:600px">
            <!-- wp:columns {"align":"wide","style":{"color":{"gradient":"linear-gradient(0deg,rgb(255,255,255) 50%,rgba(255,255,255,0) 50%)"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
            <div class="wp-block-columns alignwide has-background" style="background:linear-gradient(0deg,rgb(255,255,255) 50%,rgba(255,255,255,0) 50%);margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:column {"backgroundColor":"white"} -->
                <div class="wp-block-column has-white-background-color has-background"></div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"720px","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white","textColor":"black"} -->
                <div class="wp-block-column has-black-color has-white-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:720px">
                    <!-- wp:heading {"level":2} -->
                    <h2 class="wp-block-heading">Leave us some feedback.</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>We look forward to hearing from you!</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph -->
                    <p>Have a question or need assistance with our products or services? Our dedicated customer support team is here to help.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"480px"} -->
                <div class="wp-block-column" style="flex-basis:480px"></div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"fontSize":"large","fontFamily":"serif"} -->
            <h2 class="wp-block-heading has-serif-font-family has-large-font-size">— Contact Us</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"fontSize":"large"} -->
            <p class="has-large-font-size">Good or bad, we love to hear it all.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Share your thoughts, questions, or experiences with us. Your input is invaluable, and we're here to listen. Reach out via email, phone, or connect with us on social media. We thrive on feedback, good or bad – it helps us grow.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Get in Touch →</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"fontSize":"big"} -->
            <p class="has-big-font-size">We are here to help you with any inquiry. Call us or visit us.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Trevor values customer support satisfaction. No question has been left unanswered. We resolve everything!</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">US OFFICE</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>2520 E Main St Ventura California</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">UK OFFICE</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>52 High St Holbeach Lincolnshire</p>
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