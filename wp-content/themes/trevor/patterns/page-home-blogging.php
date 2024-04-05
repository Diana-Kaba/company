<?php
/**
 * Title: Blogging Home
 * Slug: trevor/page-home-blogging
 * Categories: page
 * Keywords: page, starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>

<!-- wp:pattern {"slug":"trevor/featured-centered-text-small"}	/-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"65%"} -->
        <div class="wp-block-column" style="flex-basis:65%">
            <!-- wp:pattern {"slug":"trevor/posts-1-col"}	/-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"5%"} -->
        <div class="wp-block-column" style="flex-basis:5%">
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:template-part {"slug":"sidebar","tagName":"aside"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
