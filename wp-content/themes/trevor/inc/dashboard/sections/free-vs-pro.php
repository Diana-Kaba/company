<?php
/**
 * Free v Pro
 *
 * @package Trevor
 */

$icons = array(
	'0' => '<span class="dashicons dashicons-no-alt"></span>',
	'1' => '<span class="dashicons dashicons-saved"></span>',
);
?>
<div class="trevor-dashboard-content">
    <div class="trevor-dashboard-panel trevor-compare-panel">

        <header class="trevor-panel-header">
            <h2><?php esc_html_e('Unlock More with Trevor Pro', 'trevor'); ?></h2>
            <p><?php esc_html_e('Unlock all the possibilties and true potential with premium version of this theme', 'trevor'); ?></p>
            <a href="<?php echo esc_url($this->theme_url_pro); ?>" target="_blank"
               class="button button-primary"><?php esc_html_e('Upgrade To Pro', 'trevor'); ?></a>
        </header>

        <div class="trevor-panel-content">

            <table>
                <thead>
                <tr>
                    <th class="trevor-text-left"><?php esc_html_e('Features', 'trevor'); ?></th>
                    <th class="trevor-text-center"><?php esc_html_e('Free', 'trevor'); ?></th>
                    <th class="trevor-text-center"><?php esc_html_e('Pro', 'trevor'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $free_vs_pro = array(
                    array(
                        'feature' => __('Help and support', 'trevor'),
                        'free' => __('Standard support', 'trevor'),
                        'pro' => __('High priority support', 'trevor'),
                    ),
                    array(
                        'feature' => __('Predesigned website templates', 'trevor'),
                        'free' => __('5', 'trevor'),
                        'pro' => __('15+', 'trevor'),
                    ),
                    array(
                        'feature' => __('Seo optimized', 'trevor'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Translation ready', 'trevor'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('RTL ready', 'trevor'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('WooCommerce ready', 'trevor'),
                        'free' => 1,
                        'pro' => __('With more options', 'trevor'),
                    ),
                    array(
                        'feature' => __('Preloader option', 'trevor'),
                        'free' => 0,
                        'pro' => __('5+ Preloaders', 'trevor'),
                    ),
                    array(
                        'feature' => __('Progressbar option', 'trevor'),
                        'free' => 0,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Typography font option', 'trevor'),
                        'free' => 1,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Typography color option', 'trevor'),
                        'free' => 1,
                        'pro' => __('Additional 1200+ Google Fonts', 'trevor'),
                    ),
                    array(
                        'feature' => __('Color option', 'trevor'),
                        'free' => 1,
                        'pro' => __('With more options', 'trevor'),
                    ),
                    array(
                        'feature' => __('Darkmode option', 'trevor'),
                        'free' => 0,
                        'pro' => 1,
                    ),
                    array(
                        'feature' => __('Scroll To Top', 'trevor'),
                        'free' => 1,
                        'pro' => __('With more options', 'trevor'),
                    ),
                );
                foreach ($free_vs_pro as $features) :
                    ?>
                    <tr>
                        <td class="trevor-text-left"><?php echo esc_html($features['feature']); ?></td>
                        <td class="trevor-text-center">
                            <?php
                            if (1 === $features['free']) {
                                echo $icons[1];
                            } elseif (0 === $features['free']) {
                                echo $icons[0];
                            } else {
                                echo esc_html($features['free']);
                            }
                            ?>
                        </td>
                        <td class="trevor-text-center">
                            <?php
                            if (1 === $features['pro']) {
                                echo $icons[1];
                            } elseif (0 === $features['pro']) {
                                echo $icons[0];
                            } else {
                                echo esc_html($features['pro']);
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
            <div class="free-vs-pro-footer">
                <a href="<?php echo esc_url($this->theme_url_pro); ?>"
                   class="button button-secondary trevor-button trevor-button-secondary" target="_blank">
                    <?php esc_html_e('And many more features', 'trevor'); ?><span
                            class="dashicons dashicons-external"></span>
                </a>
            </div>
        </div>
    </div>
</div>
