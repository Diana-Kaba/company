<?php
/**
 * Getting Started
 *
 * @package Trevor
 */

?>
<div class="trevor-dashboard-content">
	<div class="trevor-welcome-wrapper welcome-section-wrapper">
		<div class="welcome-section-intro">
			<h2 class="trevor-welcome-title">
				<?php
					printf(
						/* translators: %s: Theme Name. */
						esc_html__( 'Welcome to %s', 'trevor' ),
						$this->theme_name
					);
					?>
				<span class="trevor-version"><?php echo esc_html( $this->theme_version ); ?></span>
			</h2>
			<div class="trevor-welcome-description">
				<?php
					esc_html_e( 'We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Also check out premium version of the theme if you need more features.', 'trevor' );
				?>
			</div>
			<div class="intro__links">
				<a href="<?php echo esc_url( $this->theme_url_pro ); ?>" class="button button-primary trevor-button trevor-button-primary" target="_blank"><span class="dashicons dashicons-superhero"></span> <?php esc_html_e( 'Upgrade To Pro', 'trevor' ); ?></a>
				<a href="<?php echo esc_url( $this->theme_url ); ?>" class="button button-secondary trevor-button trevor-button-secondary" target="_blank"><span class="dashicons dashicons-media-text"></span><?php esc_html_e( 'Theme Details', 'trevor' ); ?></a>
				<a href="<?php echo esc_url( $this->redirect_template_url ); ?>" class="button button-primary trevor-button trevor-button-primary"><span class="dashicons dashicons-welcome-view-site"></span><?php esc_html_e( 'Starter Templates', 'trevor' ); ?></a>
			</div>
		</div>
		<div class="welcome-section-image">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/welcome-banner.webp' ); ?>" alt="<?php esc_attr_e( 'Trevor Screenshot', 'trevor' ); ?>">
		</div>
	</div>
	<div class="welcome-body-wrapper">
		<div class="trevor-dashboard-area dashboard-panel-primary">
			<div class="trevor-dashboard-panel trevor-dashboard-editor">
				<header class="trevor-panel-header">
					<h3><?php esc_html_e( 'Quick Settings', 'trevor' ); ?></h3>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_self" rel="noreferrer" class="trevor-theme-link"><?php esc_html_e( 'Site Editor', 'trevor' ); ?> <span class="arrow-text">→</span></a>
				</header>
				<div class="trevor-panel-content">
					<ul>
						<li><a href="<?php echo esc_url( add_query_arg( 'path', '%2Fnavigation', admin_url( 'site-editor.php' ) ) ); ?>" class="trevor-theme-link" target="_blank"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M12 4c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 14.5c-3.6 0-6.5-2.9-6.5-6.5S8.4 5.5 12 5.5s6.5 2.9 6.5 6.5-2.9 6.5-6.5 6.5zM9 16l4.5-3L15 8.4l-4.5 3L9 16z"></path></svg><?php esc_html_e( 'Navigation', 'trevor' ); ?></a></li>
						<li><a href="<?php echo esc_url( add_query_arg( 'canvas', 'edit', admin_url( 'site-editor.php' ) ) ); ?>" class="trevor-theme-link" target="_blank"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M12 4c-4.4 0-8 3.6-8 8v.1c0 4.1 3.2 7.5 7.2 7.9h.8c4.4 0 8-3.6 8-8s-3.6-8-8-8zm0 15V5c3.9 0 7 3.1 7 7s-3.1 7-7 7z"></path></svg><?php esc_html_e( 'Styles', 'trevor' ); ?></a></li>
						<li><a href="<?php echo esc_url( add_query_arg( 'path', '%2Fpage', admin_url( 'site-editor.php' ) ) ); ?>" class="trevor-theme-link" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M7 5.5h10a.5.5 0 01.5.5v12a.5.5 0 01-.5.5H7a.5.5 0 01-.5-.5V6a.5.5 0 01.5-.5zM17 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2zm-1 3.75H8v1.5h8v-1.5zM8 11h8v1.5H8V11zm6 3.25H8v1.5h6v-1.5z"></path></svg><?php esc_html_e( 'Pages', 'trevor' ); ?></a></li>
					</ul>
					<ul>
						<li><a href="<?php echo esc_url( add_query_arg( 'path', '%2Fpatterns', admin_url( 'site-editor.php' ) ) ); ?>" class="trevor-theme-link" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M21.3 10.8l-5.6-5.6c-.7-.7-1.8-.7-2.5 0l-5.6 5.6c-.7.7-.7 1.8 0 2.5l5.6 5.6c.3.3.8.5 1.2.5s.9-.2 1.2-.5l5.6-5.6c.8-.7.8-1.9.1-2.5zm-1 1.4l-5.6 5.6c-.1.1-.3.1-.4 0l-5.6-5.6c-.1-.1-.1-.3 0-.4l5.6-5.6s.1-.1.2-.1.1 0 .2.1l5.6 5.6c.1.1.1.3 0 .4zm-16.6-.4L10 5.5l-1-1-6.3 6.3c-.7.7-.7 1.8 0 2.5L9 19.5l1.1-1.1-6.3-6.3c-.2 0-.2-.2-.1-.3z"></path></svg><?php esc_html_e( 'Patterns', 'trevor' ); ?></a></li>
						<li><a href="<?php echo esc_url( add_query_arg( 'path', '%2Fwp_template', admin_url( 'site-editor.php' ) ) ); ?>" class="trevor-theme-link" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18 5.5H6a.5.5 0 00-.5.5v3h13V6a.5.5 0 00-.5-.5zm.5 5H10v8h8a.5.5 0 00.5-.5v-7.5zm-10 0h-3V18a.5.5 0 00.5.5h2.5v-8zM6 4h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2z"></path></svg><?php esc_html_e( 'Templates', 'trevor' ); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="support-section-wrapper">
                <div class="trevor-dashboard-panel trevor-dashboard-documentation">
                    <header class="trevor-panel-header">
                        <h3><?php esc_html_e( 'Documentation', 'trevor' ); ?></h3>
                    </header>
                    <div class="trevor-panel-content">
                        <?php esc_html_e( 'You\'ll find all the information you need to get started with the theme in the documentation. If you did not find the solution, you can always contact us.', 'trevor' ); ?>

                        <a href="<?php echo esc_url( $this->doc_url ); ?>" target="_blank" class="trevor-theme-link"><?php esc_html_e( 'Documentation', 'trevor' ); ?> <span class="arrow-text">→</span></a>

                    </div>
                </div>
                <div class="trevor-dashboard-panel trevor-dashboard-contact">
                    <header class="trevor-panel-header">
                        <h3><?php esc_html_e( 'Need Help?', 'trevor' ); ?></h3>
                    </header>
                    <div class="trevor-panel-content">
                       <?php esc_html_e( 'Coud not find what you were looking for on the documentation? Reach out to us and our dedicated team of members will help you to solve your problems.', 'trevor' ); ?>
                        <a href="<?php echo esc_url( $this->support_url ); ?>" target="_blank" class="trevor-theme-link">
                            <?php esc_html_e( 'Contact Us', 'trevor' ); ?> <span class="arrow-text">→</span>
                        </a>
                    </div>
                </div>
			</div>
		</div>
        <div class="trevor-dashboard-area dashboard-panel-secondary">
            <div class="trevor-dashboard-panel trevor-dashboard-review">
                <header class="trevor-panel-header">
                    <h3><?php esc_html_e( 'Rate Us', 'trevor' ); ?></h3>
                </header>
                <div class="trevor-panel-content">
                    <div class="trevor-review-stars">
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                    </div>
                    <p><?php esc_html_e( 'We welcome your feedback and would be thankful for the review you provide.', 'trevor' ); ?></p>
                    <a href="<?php echo esc_url( $this->review_url ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Submit a Review', 'trevor' ); ?></a>
                </div>
            </div>
		</div>
	</div>
</div>
<div class="trevor-dashboard-footer">
	<div class="content-wrapper">
		<div class="trevor-dashboard-area dashboard-panel-primary">
            <div class="trevor-dashboard-panel trevor-dashboard-upgrade">
                <header class="trevor-panel-header">
                    <h3>
                        <?php esc_html_e( 'Unlock more features with premium version of this theme', 'trevor' ); ?>
                    </h3>
                </header>
                <div class="trevor-panel-content">
                    <ul class="features-list">
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'All Premium Modules', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Advance Typography', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Header Options', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Footer Options', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Color Options', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Starter Templates', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Fully Responsive', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Highly customizable grid', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Google fonts', 'trevor' ); ?></li>
                        <li><span class="dashicons dashicons-plus"></span><?php esc_html_e( 'and Much More Stuff...', 'trevor' ); ?></li>
                    </ul>
                </div>
            </div>
		</div>
        <div class="trevor-dashboard-area dashboard-panel-secondary">
            <div class="trevor-dashboard-panel trevor-dashboard-upsale">
                <header class="trevor-panel-header">
                    <h3>
                        <?php esc_html_e( 'Get Premium Version', 'trevor' ); ?>
                    </h3>
                </header>
                <div class="trevor-panel-content">
                    <p><?php esc_html_e( 'Unlock all the possibilties and true potential with premium version of this theme', 'trevor' ); ?></p>
                    <a href="<?php echo esc_url( $this->theme_url_pro ); ?>" target="_blank" class="button button-primary trevor-button trevor-button-primary"><span class="dashicons dashicons-superhero"></span><?php esc_html_e( 'Upgrade To Pro', 'trevor' ); ?></a>
                </div>
            </div>
		</div>
	</div>
</div>
