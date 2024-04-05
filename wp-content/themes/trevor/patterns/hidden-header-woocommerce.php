<?php
/**
 * Title: WooCommerce Nav Icons
 * Slug: trevor/hidden-header-woocommerce
 * Inserter: no
 */
?>

<?php
if (!function_exists('is_plugin_active')) {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
}


if (is_plugin_active('woocommerce/woocommerce.php')) {
    ?>
    <!-- wp:woocommerce/customer-account {"iconClass":"wc-block-customer-account__account-icon"} /-->

    <!-- wp:woocommerce/mini-cart /-->
    <?php
}
?>
