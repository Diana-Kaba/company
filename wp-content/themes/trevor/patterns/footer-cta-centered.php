<?php

/**
 * Title: Footer with centered CTA and logo
 * Slug: trevor/footer-centered-cta
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-base-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
        <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"50px"}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="font-size:50px;font-style:normal;font-weight:400">Let’s work together on your<br>next project</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Join the growing community of satisfied clients as we continue to serve and elevate countless brands.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:social-links {"iconColor":"ti-fg-alt","iconColorValue":"#FBFBFB","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only">
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        <!-- wp:social-link {"url":"#","service":"twitter"} /-->
        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"base","fontSize":"small"} -->
    <p class="has-text-align-center has-base-color has-text-color has-link-color has-small-font-size">
        <?php
        $credit_link = '<a href="' . esc_url(__('https://themeinwp.com/theme/trevor', 'trevor')) . '">Trevor</a>';
        echo sprintf(
            esc_html__('© 2023 · Powered by WordPress and %1$s', 'trevor'),
            $credit_link
        );
        ?>
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->