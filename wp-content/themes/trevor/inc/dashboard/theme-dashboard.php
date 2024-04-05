<?php
/**
 * Dashboard Page
 *
 * @package Trevor
 */

if ( ! class_exists( 'Trevor_Dashboard' ) ) {
	/**
	 * Main class.
	 *
	 * @since 1.0.0
	 */
	class Trevor_Dashboard {

		/**
		 * Instance
		 *
		 * @access private
		 * @var null $instance
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * @since 1.0.0
		 * @return object initialized object of class.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Theme Name
		 *
		 * @access private
		 * @var null $theme_name
		 * @since 1.0.0
		 */
		private $theme_name;

		/**
		 * Theme Version
		 *
		 * @access private
		 * @var null $theme_version
		 * @since 1.0.0
		 */
		private $theme_version;

		/**
		 * Theme Slug
		 *
		 * @access private
		 * @var null $theme_slug
		 * @since 1.0.0
		 */
		private $theme_slug;

		/**
		 * Page Slug
		 *
		 * @access private
		 * @var null $page_slug
		 * @since 1.0.0
		 */
		private $page_slug;

		/**
		 * Review Url
		 *
		 * @access private
		 * @var null $review_url
		 * @since 1.0.0
		 */
		private $review_url;

		/**
		 * Redirect Template Url
		 *
		 * @access private
		 * @var null $redirect_template_url
		 * @since 1.0.0
		 */
		private $redirect_template_url;

		/**
		 * Holds Errors
		 *
		 * @access private
		 * @var array $errors
		 * @since 1.0.0
		 */
		private $errors = array();

		/**
		 * Tabs Array
		 *
		 * @access private
		 * @var array $tab_sections
		 * @since 1.0.0
		 */
		private $tab_sections = array();

		/**
		 * Recommended Plugins
		 *
		 * @access private
		 * @var array $recommended_plugins
		 * @since 1.0.0
		 */
		private $recommended_plugins = array();

		/**
		 * Plugins for Starter Templates
		 *
		 * @access private
		 * @var array $starter_template_plugins
		 * @since 1.0.0
		 */
		private $starter_template_plugins = array();

		/**
		 * Theme Url
		 *
		 * @access private
		 * @var string $theme_url
		 * @since 1.0.0
		 */
		private $theme_url = 'https://www.themeinwp.com/theme/trevor/';

		/**
		 * Theme Url Pro
		 *
		 * @access private
		 * @var string $theme_url
		 * @since 1.0.0
		 */
		private $theme_url_pro = 'https://www.themeinwp.com/theme/trevor-pro/';

		/**
		 * Documentation Url
		 *
		 * @access private
		 * @var string $doc_url
		 * @since 1.0.0
		 */
		private $doc_url = 'https://docs.themeinwp.com/docs/trevor/';

		/**
		 * Support Url
		 *
		 * @access private
		 * @var string $support_url
		 * @since 1.0.0
		 */
		private $support_url_community = 'https://wordpress.org/support/theme/trevor/';
		private $support_url = 'https://www.themeinwp.com/support/';

		/**
		 * Constructor.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			$theme = wp_get_theme();

			if ( is_child_theme() ) {
				$this->theme_name = $theme->parent()->get( 'Name' );
			} else {
				$this->theme_name = $theme->get( 'Name' );
			}

			$this->theme_version = $theme->get( 'Version' );
			$this->theme_slug    = $theme->get_template();
			$this->page_slug     = $this->theme_slug . '-dashboard';

			$this->review_url = 'https://wordpress.org/support/theme/' . $this->theme_slug . '/reviews/?rate=5#new-post';

			$template_link = add_query_arg(
				array(
					'page'    => $this->page_slug,
					'section' => 'starter-templates',
				),
				admin_url( 'themes.php' )
			);

			$this->redirect_template_url = $template_link;

			// Define Tabs Sections.
			$this->tab_sections = array(
				'getting-started'     => __( 'Getting Started', 'trevor' ),
				'recommended-plugins' => __( 'Recommended Plugins', 'trevor' ),
				'starter-templates'   => __( 'Starter Templates', 'trevor' ),
				'free-vs-pro'         => __( 'Free vs Pro', 'trevor' ),
			);

			// List of Plugins used on starter setup.
			$this->starter_template_plugins = array(
				array(
					'name'   => __( 'One Click Demo Import', 'trevor' ),
					'desc'   => __( 'Import your content, widgets and theme settings with one click.', 'trevor' ),
					'slug'   => 'one-click-demo-import',
					'path'   => 'one-click-demo-import/one-click-demo-import.php',
					'status' => self::get_plugin_status( 'one-click-demo-import/one-click-demo-import.php' ),
					'icon'   => 'https://ps.w.org/one-click-demo-import/assets/icon-256x256.png',
				),
				array(
					'name'   => __( 'Demo Importer Companion', 'trevor' ),
					'desc'   => __( 'Awesome starter templates for themes made by ThemeInWP.', 'trevor' ),
					'slug'   => 'demo-importer-companion',
					'path'   => 'demo-importer-companion/demo-importer-companion.php',
					'status' => self::get_plugin_status( 'demo-importer-companion/demo-importer-companion.php' ),
					'icon'   => 'https://ps.w.org/demo-importer-companion/assets/icon-256x256.png',
				),
			);

			// And any extra list of Recommended Plugins.
			$this->recommended_plugins = array_merge(
				$this->starter_template_plugins,
				array(
					array(
						'name'   => __( 'MailChimp for WordPress', 'trevor' ),
						'desc'   => __( 'Adds various highly effective sign-up methods to your site.', 'trevor' ),
						'slug'   => 'mailchimp-for-wp',
						'path'   => 'mailchimp-for-wp/mailchimp-for-wp.php',
						'status' => self::get_plugin_status( 'mailchimp-for-wp/mailchimp-for-wp.php' ),
						'icon'   => 'https://ps.w.org/mailchimp-for-wp/assets/icon-256x256.png',
					)
				)
			);

			$this->errors = array(
				'permission' => __( 'Sorry, you do not have permission to perform this action.', 'trevor' ),
				'nonce'      => __( 'Could not verifry the nonce.', 'trevor' ),
				'default'    => __( 'Oops! something went wrong.', 'trevor' ),
				'invalid'    => __( 'Not found!', 'trevor' ),
			);

			if ( current_user_can( 'manage_options' ) ) {

				// Create admin notices.
				add_action( 'admin_notices', array( $this, 'display_admin_notice' ), 99 );

				// Create a settings page.
				add_action( 'admin_menu', array( $this, 'add_menu' ) );
				add_action( 'admin_bar_menu', array( $this, 'add_bar_menu' ), 999 );
			}

			add_action( 'admin_init', array( $this, 'init_reminder' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'wp_ajax_trevor_dismiss_notice', array( $this, 'dismiss_notice' ) );
			add_action( 'wp_ajax_trevor_install_plugin', 'wp_ajax_install_plugin' );
			add_action( 'wp_ajax_trevor_activate_plugin', array( $this, 'activate_plugin' ) );
			add_action( 'switch_theme', array( $this, 'reset_notices' ) );
			add_action( 'after_switch_theme', array( $this, 'reset_notices' ) );
		}

		/**
		 * Update the reminder time.
		 *
		 * @since 1.0.0
		 */
		public function init_reminder() {
			if ( ! get_option( 'trevor_reminder_time' ) ) {
				update_option( 'trevor_reminder_time', time() + 14 * DAY_IN_SECONDS );
			}
		}

		/**
		 * Delete the saved options.
		 *
		 * @since 1.0.0
		 */
		public function reset_notices() {
			delete_option( 'trevor_reminder_time' );
			delete_option( 'trevor_dismissed_notices' );
		}

		/**
		 * Generate proper data for starter plugin installation.
		 *
		 * @since 1.0.0
		 */
		public function starter_template_button() {
			$plugins_active = true;
			$btn_html       = '';
			$data           = array();

			if ( $this->starter_template_plugins && is_array( $this->starter_template_plugins ) ) :
				foreach ( $this->starter_template_plugins as $plugin_data ) :

					if ( 'activated' === $plugin_data['status'] ) :
						$data_action = '';
					else :
						$plugins_active = false;
						if ( 'install' === $plugin_data['status'] ) {
							$data_action = 'trevor_install_plugin';
						} else {
							$data_action = 'trevor_activate_plugin';
						}
					endif;

					$data_slug = $plugin_data['slug'];
					$data_path = $plugin_data['path'];

					$btn_html .= "<div data-action='" . esc_attr( $data_action ) . "' data-slug='" . esc_attr( $data_slug ) . "' data-path='" . esc_attr( $data_path ) . "'></div>";
				endforeach;
			endif;

			$data['plugins_active'] = $plugins_active;
			$data['btn_html']       = $btn_html;

			return $data;
		}

		/**
		 * Dislpay admin notices.
		 *
		 * @since 1.0.0
		 */
		public function display_admin_notice() {

			if ( $this->can_display_notice() && ! $this->is_dismissed( 'welcome' ) ) {
				$this->display_welcome_notice();
			}

			$reminder_time = get_option( 'trevor_reminder_time' );
			if ( $this->can_display_notice() && ! $this->is_dismissed( 'review' ) && ! empty( $reminder_time ) && time() > $reminder_time ) {
				$this->display_review_notice();
			}

		}

		/**
		 * Display welcome notice.
		 *
		 * @since 1.0.0
		 */
		public function display_welcome_notice() {
			$btn_data = $this->starter_template_button();
			?>
			<div id="trevor-welcome-notice" class="trevor-dashboard-wrapper notice trevor-notice is-dismissible">
				<div class="trevor-welcome-wrapper trevor-notice-wrapper">
					<div class="trevor-notice-intro">
                        <div class="trevor-text-intro">
                            <h2 class="trevor-welcome-title">
                                <?php
                                    printf(
                                        /* translators: %s: Theme Name. */
                                        esc_html__( 'Thank you for using %s', 'trevor' ),
                                        $this->theme_name
                                    );
                                ?>
                                <span class="trevor-version"><?php echo esc_html( $this->theme_version ); ?></span>
                            </h2>
                            <div class="trevor-welcome-description">
                                <?php
                                printf(
                                    /* translators: %s: Theme Name. */
                                    esc_html__( 'Congratulations on choosing %s. Create professionally designed pixel-perfect websites in minutes.', 'trevor' ),
                                    $this->theme_name
                                );
                                ?>
                            </div>
                        </div>
                        <div class="trevor-showcase-intro">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/welcome-banner.webp' ); ?>" alt="<?php esc_attr_e( 'Trevor Screenshot', 'trevor' ); ?>">
                        </div>
					</div>
					<div class="trevor-notice-message">
						<div class="trevor-notice-item trevor-notice-template-import">
							<h3><?php esc_html_e( 'Starter Templates', 'trevor' ); ?></h3>
							<?php if ( $btn_data['plugins_active'] ) : ?>
								<div><?php esc_html_e( 'To fully capitalize on the features our theme has to offer, please make sure to visit the theme dashboard page.', 'trevor' ); ?></div>
								<div><a href="<?php echo esc_url( $this->redirect_template_url ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started', 'trevor' ); ?> <span class="arrow-text">→</span></a></div>
							<?php else : ?>
								<div><?php esc_html_e( 'Install and activate all recommended plugins to import starter templates.', 'trevor' ); ?></div>
								<div class="starter-template-action">
									<div class="starter-template-plugins-info">
										<?php echo $btn_data['btn_html']; ?>
									</div>
									<div><a href="<?php echo esc_url( $this->redirect_template_url ); ?>" class="button button-primary"><?php esc_html_e( 'Install & Activate', 'trevor' ); ?></a></div>
								</div>
							<?php endif; ?>
						</div>
						<div class="trevor-notice-item trevor-notice-theme-dashboard">
							<h3><?php esc_html_e( 'Documentation', 'trevor' ); ?></h3>
							<div><?php esc_html_e( 'Explore our extensive documentation for comprehensive guidance, spanning from basic setup to advanced customization.', 'trevor' ); ?></div>
							<div><a href="<?php echo esc_url( $this->doc_url ); ?>" class="trevor-theme-link"><?php esc_html_e( 'Documentation', 'trevor' ); ?><span class="arrow-text">→</span></a></div>
						</div>
                        <div class="trevor-notice-item trevor-notice-theme-support">
							<h3><?php esc_html_e( 'Support & Community', 'trevor' ); ?></h3>
							<div><?php esc_html_e( 'If you run into any hurdles or have questions, Join the Trevor community to connect with other Trevor enthusiasts.', 'trevor' ); ?></div>
							<div><a href="<?php echo esc_url( $this->support_url_community ); ?>" class="trevor-theme-link"><?php esc_html_e( 'WP.org Community', 'trevor' ); ?><span class="arrow-text">→</span></a></div>
						</div>
                        <div class="trevor-notice-item trevor-notice-theme-upgrade">
							<h3><?php esc_html_e( 'Upgrade to Trevor Pro', 'trevor' ); ?></h3>
							<div><?php esc_html_e( 'Unlock a world of premium features. Enjoy Premium Blocks, enhanced functionality, priority support, and much more.', 'trevor' ); ?></div>
							<div><a href="<?php echo esc_url( $this->theme_url_pro ); ?>" class="trevor-theme-link"><?php esc_html_e( 'Upgrade', 'trevor' ); ?><span class="arrow-text">→</span></a></div>
						</div>
					</div>
				</div>
				<button type="button" class="notice-dismiss trevor-remove-notice" data-dismiss="welcome">
					<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'trevor' ); ?></span>
				</button>
			</div>
			<?php
		}

		/**
		 * Display review notice.
		 *
		 * @since 1.0.0
		 */
		public function display_review_notice() {
			?>
			<div id="trevor-review-notice" class="notice trevor-notice is-dismissible">
				<div class="trevor-review-wrapper trevor-notice-wrapper">
					<div class="trevor-notice-message">
						<div class="trevor-notice-item trevor-notice-review-content">

								<h3>
									<?php
									printf(
										/* translators: %s: Theme Name. */
										esc_html__( 'Thank you for using %s', 'trevor' ),
										$this->theme_name
									);
									?>
								</h3>
								<p>
									<?php
									printf(
										/* translators: %1$s is link start tag, %2$s is link end tag. */
										esc_html__( ' We hope you love it, and we would really appreciate it if you would %1$srate us%2$s and spread your positive words.', 'trevor' ),
										'<a target="_blank" href="' . esc_url( $this->review_url ) . '">',
										'</a>'
									);
									?>
								</p>

							<div class="trevor-review-btn-grp">
								<a href="<?php echo esc_url( $this->review_url ); ?>" target="_blank"><span><?php esc_html_e( '😎', 'trevor' ); ?></span><?php esc_html_e( ' Sure Thing', 'trevor' ); ?></a>
								<a href="#" class="trevor-remove-notice" data-dismiss="review"><span><?php esc_html_e( '👍', 'trevor' ); ?></span><?php esc_html_e( ' Already rated', 'trevor' ); ?></a>
								<a href="#" class="trevor-remove-notice" data-dismiss="review" data-dismiss-type="remind"><span><?php esc_html_e( '⏰', 'trevor' ); ?></span><?php esc_html_e( ' Remind Later', 'trevor' ); ?></a>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="notice-dismiss trevor-remove-notice" data-dismiss="review">
					<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'trevor' ); ?></span>
				</button>
			</div>
			<?php
		}

		/**
		 * Should we display notices on this screen?
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		protected function can_display_notice() {
			$screen = get_current_screen();

			if ( empty( $screen ) ) {
				return false;
			}
			return in_array(
				$screen->id,
				array(
					'dashboard',
					'themes',
				)
			);
		}

		/**
		 * Has a notice been dismissed?
		 *
		 * @since 1.0.0
		 *
		 * @param string $notice Notice name.
		 * @return bool
		 */
		public static function is_dismissed( $notice ) {
			$dismissed = get_option( 'trevor_dismissed_notices', array() );
			return in_array( $notice, $dismissed );
		}

		/**
		 * Stores a dismissed notice in database
		 *
		 * @since 1.0.0
		 *
		 * @param string $notice Notice to be Dismissed.
		 * @return void
		 */
		public static function dismiss( $notice ) {
			$dismissed = get_option( 'trevor_dismissed_notices', array() );

			if ( ! in_array( $notice, $dismissed ) ) {
				$dismissed[] = $notice;
				update_option( 'trevor_dismissed_notices', array_unique( $dismissed ) );
			}
		}


		/**
		 * Add theme dashboard page.
		 *
		 * @since 1.0.0
		 */
		public function add_menu() {
			add_theme_page(
				__( 'Theme Dashboard', 'trevor' ),
				__( 'Theme Dashboard', 'trevor' ),
				'manage_options',
				$this->page_slug,
				array( $this, 'render_main_page' ),
				1
			);
		}

		/**
		 * Add link in menu bar
		 *
		 * @since 1.0.0
		 */
		public function add_bar_menu() {

			global $wp_admin_bar;
			if ( ! is_super_admin() || ! is_admin_bar_showing() ) {
				return;
			}
			$wp_admin_bar->add_menu(
				array(
					'parent' => 'site-name',
					'id'     => $this->page_slug,
					'title'  => esc_html__( 'Theme Dashboard', 'trevor' ),
					'href'   => admin_url( "themes.php?page=$this->page_slug" ),
				)
			);
		}

		/**
		 * Dashboard Page
		 *
		 * @since 1.0.0
		 */
		public function render_main_page() {
			$tabs = $this->tab_sections;
			?>
			<div class="trevor-dashboard-wrapper">
				<?php require_once get_template_directory() . '/inc/dashboard/sections/header.php'; ?>
				<?php
				$section = ( isset( $_GET['section'] ) ) ? sanitize_text_field( wp_unslash( $_GET['section'] ) ) : '';
				switch ( $section ) {
					case 'recommended-plugins':
						require get_template_directory() . '/inc/dashboard/sections/recommended-plugins.php';
						break;

					case 'starter-templates':
						require get_template_directory() . '/inc/dashboard/sections/starter-templates.php';
						break;

					case 'free-vs-pro':
						require get_template_directory() . '/inc/dashboard/sections/free-vs-pro.php';
						break;

					default:
						require get_template_directory() . '/inc/dashboard/sections/getting-started.php';
				}
				?>
			</div>
			<?php
		}

		/**
		 * Get plugin status.
		 *
		 * @since 1.0.0
		 *
		 * @param string $plugin_file Plugin slug.
		 */
		public static function get_plugin_status( $plugin_file ) {

			$installed_plugins = get_plugins();

			if ( ! isset( $installed_plugins[ $plugin_file ] ) ) {
				return 'install';
			} elseif ( is_plugin_active( $plugin_file ) ) {
				return 'activated';
			} else {
				return 'installed';
			}
		}

		/**
		 * Get error msg.
		 *
		 * @since 1.0.0
		 *
		 * @param string $type Error type.
		 */
		public function get_error_msg( $type ) {

			if ( ! isset( $this->errors[ $type ] ) ) {
				$type = 'default';
			}

			return $this->errors[ $type ];
		}


		/**
		 * Acticate plugin callback.
		 *
		 * @since 1.0.0
		 */
		public function activate_plugin() {

			$response_data = array( 'message' => $this->get_error_msg( 'permission' ) );

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( $response_data );
			}

			if ( empty( $_POST ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'invalid' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! check_ajax_referer( 'trevor-plugin-activate', 'nonce', false ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'nonce' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! current_user_can( 'install_plugins' ) || ! isset( $_POST['path'] ) || ! sanitize_text_field( wp_unslash( $_POST['path'] ) ) ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => __( 'Please specify a plugin', 'trevor' ),
					)
				);
			}

			$plugin_path = ( isset( $_POST['path'] ) ) ? sanitize_text_field( wp_unslash( $_POST['path'] ) ) : '';

			$activate = activate_plugin( $plugin_path, '', false, true );

			if ( is_wp_error( $activate ) ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => $activate->get_error_message(),
					)
				);
			}

			wp_send_json_success(
				array(
					'success' => true,
					'message' => __( 'Plugin Activated Successfully', 'trevor' ),
				)
			);
		}

		/**
		 * Enqueue scripts for dashboard page.
		 *
		 * @since 1.0.0
		 *
		 * @param string $hook Page hook.
		 */
		public function enqueue_scripts( $hook ) {

			if ( ! in_array(
				$hook,
				array(
					'index.php',
					'themes.php',
					'appearance_page_trevor-dashboard',
				)
			) ) {
				return;
			}
			
			$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

			wp_enqueue_style( 'trevor-dashboard-style', get_template_directory_uri() . '/inc/dashboard/css/style' . $min . '.css', array(), $this->theme_version );
			wp_enqueue_script( 'trevor-dashboard-script', get_template_directory_uri() . '/inc/dashboard/js/bundle.js', array( 'jquery' ), $this->theme_version, true );

			wp_localize_script(
				'trevor-dashboard-script',
				'trevorDashboard',
				array(
					'notice_dismiss_nonce'   => wp_create_nonce( 'trevor-dismiss-nonce' ),
					'plugin_install_nonce'   => wp_create_nonce( 'updates' ),
					'plugin_activate_nonce'  => wp_create_nonce( 'trevor-plugin-activate' ),
					'plugin_installing_text' => __( 'Installing', 'trevor' ),
					'plugin_installed_text'  => __( 'Installed', 'trevor' ),
					'plugin_activating_text' => __( 'Activating', 'trevor' ),
					'plugin_activated_text'  => __( 'Activated', 'trevor' ),
					'plugin_activate_text'   => __( 'Activate', 'trevor' ),
				)
			);
		}

		/**
		 * Dismiss notice callback
		 *
		 * @since 1.0.0
		 */
		public function dismiss_notice() {

			$response_data = array( 'message' => $this->get_error_msg( 'permission' ) );

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( $response_data );
			}

			if ( empty( $_POST ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'invalid' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! check_ajax_referer( 'trevor-dismiss-nonce', 'nonce', false ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'nonce' ) );
				wp_send_json_error( $response_data );
			}

			$dismiss = isset( $_POST['dismiss'] ) ? sanitize_text_field( $_POST['dismiss'] ) : '';
			if ( ! $dismiss ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => __( 'No dismissable notice found.', 'trevor' ),
					)
				);
			}

			$dismiss_type = isset( $_POST['dismiss_type'] ) ? sanitize_text_field( $_POST['dismiss_type'] ) : '';

			if ( $dismiss_type && 'remind' === $dismiss_type ) {
				$reminder_time = time() + 14 * DAY_IN_SECONDS;
				update_option( 'trevor_reminder_time', $reminder_time );
			} else {
				self::dismiss( $dismiss );
			}

			wp_send_json_success(
				array(
					'success' => true,
					'message' => __( 'Notice Dismissed Successfully', 'trevor' ),
				)
			);
		}

	}

}

Trevor_Dashboard::get_instance();
