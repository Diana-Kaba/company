<?php
/**
 * Title: Brands Showcase Section
 * Slug: trevor/brands-showcase
 * Categories: featured
 * Keywords: CTA, landing, marquee
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"trevor-marquee-showcase","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group trevor-marquee-showcase" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
    <!-- wp:gallery {"columns":1,"imageCrop":false,"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"left":"60px"}}},"className":"trevor-marquee is-style-grayscale-image-filter"} -->
    <figure class="wp-block-gallery has-nested-images columns-1 trevor-marquee is-style-grayscale-image-filter">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-01.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-02.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-03.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-04.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-05.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand/brand-06.webp"  alt="" />
        </figure>
        <!-- /wp:image -->

    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->