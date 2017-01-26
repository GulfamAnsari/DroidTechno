<?php
/**
 * Display a welcome admin page.
 *
 * @since 3.2
 *
 * @package Page Builder Sandwich
 */

if ( ! defined( 'ABSPATH' ) ) { exit; // Exit if accessed directly.
}

if ( ! class_exists( 'PBSAdminWelcome' ) ) {

	/**
	 * This is where all the admin page creation happens.
	 */
	class PBSAdminWelcome {

		/**
		 * Hook into WordPress.
		 */
		function __construct() {
			add_action( 'admin_menu', array( $this, 'create_admin_menu' ) );
			add_action( 'activated_plugin', array( $this, 'redirect_to_welcome_page' ) );
		}


		/**
		 * Creates the PBS admin menu item.
		 *
		 * @since 3.2
		 */
		public function create_admin_menu() {
			add_menu_page(
				esc_html__( 'Page Builder Sandwich', PAGE_BUILDER_SANDWICH ), // Page title.
				esc_html__( 'PBSandwich', PAGE_BUILDER_SANDWICH ), // Menu title.
				'manage_options', // Permissions.
				'page-builder-sandwich', // Slug.
				array( $this, 'create_admin_page' ) // Page creation function.
			);

			add_submenu_page(
				'page-builder-sandwich', // Parent slug.
				esc_html__( 'Page Builder Sandwich', PAGE_BUILDER_SANDWICH ), // Page title.
				esc_html__( 'Home', PAGE_BUILDER_SANDWICH ), // Menu title.
				'manage_options', // Permissions.
				'page-builder-sandwich', // Slug.
				array( $this, 'create_admin_page' ) // Page creation function.
			);
		}


		/**
		 * Creates the contents of the welcome admin page.
		 *
		 * @since 3.2
		 */
		public function create_admin_page() {
			?>
			<div class="wrap about-wrap">
				<img class="pbs-logo" src="<?php echo esc_url( plugins_url( 'page_builder_sandwich/images/pbs-logo.png', __FILE__ ) ) ?>"/>
				<h1><?php esc_html_e( 'Welcome to Page Builder Sandwich', PAGE_BUILDER_SANDWICH ) ?> v<?php esc_html_e( VERSION_PAGE_BUILDER_SANDWICH ) ?></h1>
				<p class="pbs-subheading"><?php esc_html_e( 'Creating Stunning Webpages Is Now as Easy as Making a Sandwich', PAGE_BUILDER_SANDWICH ) ?></p>
				<div class="welcome-panel">
					<div class="welcome-panel-column">
						<div class="pbs-welcome-column-wrapper">
							<h3><?php esc_html_e( "Let's Get Started", PAGE_BUILDER_SANDWICH ) ?></h3>
							<a class="button button-primary button-hero" href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ) ?>"><?php esc_html_e( 'Create New Page', PAGE_BUILDER_SANDWICH ) ?></a>
							<p><?php esc_html_e( 'To start, create a new page then click on the awesome "Edit with Page Builder Sandwich" button.', PAGE_BUILDER_SANDWICH ) ?></p>
						</div>
					</div>
					<div class="welcome-panel-column">
						<div class="pbs-welcome-column-wrapper">
							<h3><?php esc_html_e( 'Join The Community', PAGE_BUILDER_SANDWICH ) ?></h3>
							<p><?php esc_html_e( 'Join fellow PBSandwich aficionados in our community, ask questions, give feedback, suggest features, and discuss your projects!', PAGE_BUILDER_SANDWICH ) ?></p>
							<ul>
								<li><a href="https://pbsandwich.herokuapp.com/" target="_pbsadmin"><span class="dashicons dashicons-admin-comments"></span> <?php esc_html_e( 'Join our new community in Slack', PAGE_BUILDER_SANDWICH ) ?></a></li>
								<li><a href="https://twitter.com/WP_PBSandwich" target="_pbsadmin"><span class="dashicons dashicons-twitter"></span> <?php esc_html_e( 'Follow @WP_PBSandwich in Twitter', PAGE_BUILDER_SANDWICH ) ?></a></li>
							</ul>
						</div>
					</div>
					<div class="welcome-panel-column welcome-panel-last">
						<div class="pbs-welcome-column-wrapper">
							<h3><?php esc_html_e( 'Need Help?', PAGE_BUILDER_SANDWICH ) ?></h3>
							<p>
								<?php
								printf(
									__( 'Stuck with something? Check out our %sknowledge base%s. You can also contact us for %sbug reports%s here in your dashboard.', PAGE_BUILDER_SANDWICH ),
								 	'<a href="http://docs.pagebuildersandwich.com/" target="_pbsadmin">',
									'</a>',
								 	'<a href="' . esc_url( admin_url( 'admin.php?page=page-builder-sandwich-contact' ) ) . '" target="_pbsadmin">',
									'</a>'
								);
								?>
							</p>
							<?php
							if ( PBS_IS_LITE ) {
								?>
								<p>
									<?php
									printf(
										'If you need more extensive help, please consider %sgoing premium%s to get support.',
										'<a href="' . esc_url( admin_url( 'admin.php?page=page-builder-sandwich-pricing' ) ) . '">',
										'</a>'
									);
									?>
								</p>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="welcome-panel">
					<div class="welcome-panel-column" style="width: 50%;">
						<div class="pbs-welcome-column-wrapper">
							<h3><?php esc_html_e( "What's New", PAGE_BUILDER_SANDWICH ) ?></h3>
							<div class="pbs-whats-new">
								<div>
									<p><strong>Responsive Views</strong><br>
										Switch between desktop, tablet and mobile phone views while editing.</p>
								</div>
								<div>
									<p><strong>New Row Backgrounds</strong><br>
										Add image parallax, video backgrounds and Ken Burns background sliders to your rows. (Premium)</p>
								</div>
								<div>
									<p><strong>Lote of New Elements</strong><br>
										Count up, page heading, icon label, pricing tables, social icons and more! (Premium)</p>
								</div>
								<div>
									<p><strong>More Responsive</strong><br>
										Enhanced responsiveness, we now perform a lot of tweaks to make your site look good.</p>
								</div>
								<div>
									<p><strong>Edit Post Titles</strong><br>
										Now you can change page and post titles when editing. Just click on your title and type away.</p>
								</div>
								<div>
									<p><strong>Carousel Fade</strong><br>
										There are a few new options available in carousels: fade sliding animation and animation speed. (Premium)</p>
								</div>
								<div>
									<p><strong>Autosave</strong><br>
										Never lose your work again! Your changes are saved every 15 minutes.</p>
								</div>
								<div>
									<p><strong>Post Locking</strong><br>
										Other users will know that you're building your page, and you can also take over other posts being edited by others.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="welcome-panel-column welcome-panel-last" style="width: 50%;">
						<div class="pbs-welcome-column-wrapper">
							<h3><?php esc_html_e( 'Watch the Tour', PAGE_BUILDER_SANDWICH ) ?></h3>
							<div class="pbs-tour">
								<iframe src="https://www.youtube.com/embed/dSU2l1Vhp50?rel=0&showinfo=0&autohide=1&controls=0" width="800" height="450" frameborder="0" allowfullscreen="1"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="welcome-panel pbs-welcome-changelog">
					<h3><?php esc_html_e( "A Stickler for details? Here's everything's that changed in this version", PAGE_BUILDER_SANDWICH ) ?></h3>
					<ul>
<li style="color: #3498db"><code>New</code> Responsive views! Use the responsive buttons to switch between desktop, tablet and mobile phone screen sizes.</li>
<li style="color: #3498db"><code>New</code> Page Templates!</li>
<li style="color: #3498db"><code>New</code> Count up animation option!</li>
<li style="color: #3498db"><code>New</code> Parallax backgrounds!</li>
<li style="color: #3498db"><code>New</code> Video backgrounds for rows! (self-hosted / uploaded webm & mp4 videos)</li>
<li style="color: #3498db"><code>New</code> Video backgrounds for rows from YouTube and Vimeo URLs!</li>
<li style="color: #3498db"><code>New</code> Ken Burns background effect!</li>
<li style="color: #3498db"><code>New</code> Countdown element!</li>
<li style="color: #3498db"><code>New</code> Responsive headings, this can be turned off in the admin settings.</li>
<li style="color: #3498db"><code>New</code> Added toolbar button for hiding rows in tablets and mobile phones.</li>
<li style="color: #3498db"><code>New</code> Icon Label element!</li>
<li style="color: #3498db"><code>New</code> Contact details element</li>
<li style="color: #3498db"><code>New</code> Pricing table element</li>
<li style="color: #3498db"><code>New</code> Page Heading element</li>
<li style="color: #3498db"><code>New</code> Testimonials element</li>
<li style="color: #3498db"><code>New</code> Call to action element</li>
<li style="color: #3498db"><code>New</code> Supported plugin elements, these will show up when the plugin is active: WooCommerce, Contact Form 7, Advanced Custom Fields, Instagram Feed, and Events Calendar</li>
<li style="color: #3498db"><code>New</code> Image box element</li>
<li style="color: #3498db"><code>New</code> Social Icons element</li>
<li style="color: #3498db"><code>New</code> Icons can now have links.</li>
<li style="color: #3498db"><code>New</code> Horizontal content option for columns. Useful for side-by-side buttons and icons.</li>
<li style="color: #f39c12"><code>Enhancement</code> Icons which already have colors can now be re-colored.</li>
<li style="color: #f39c12"><code>Enhancement</code> The toolbar goes on top of the element if the element gets too small.</li>
<li style="color: #f39c12"><code>Enhancement</code> The add elements panel now closes when leaving the add elements button.</li>
<li style="color: #f39c12"><code>Enhancement</code> Tweaked the design of the top admin bar.</li>
<li style="color: #f39c12"><code>Enhancement</code> Container outlines are now dual colored for better visibility inside dark backgrounds.</li>
<li style="color: #f39c12"><code>Enhancement</code> A more neutral highlight color.</li>
<li style="color: #f39c12"><code>Enhancement</code> Resizing images larger than the available size now makes them have 100% width.</li>
<li style="color: #f39c12"><code>Enhancement</code> Toolbars for rows, columns and other containers are now larger and have neutral colors.</li>
<li style="color: #f39c12"><code>Enhancements</code> Better responsive styles row rows and columns.</li>
<li style="color: #f39c12"><code>Enhancement</code> Creating a single row now has the content centered vertically by default.</li>
<li style="color: #f39c12"><code>Enhancement</code> Changing the font size now gives responsive font sizes!</li>
<li style="color: #e74c3c"><code>Fixed</code> The line height button now reads "increase line height" and not "Insert"</li>
<li style="color: #e74c3c"><code>Fixed</code> Performance issue with the line height button.</li>
<li style="color: #e74c3c"><code>Fixed</code> Embedded videos are now resized properly using fluidvids.js</li>
<li style="color: #e74c3c"><code>Fixed</code> In Twenty Seventeen, images added using PBS always had a border.</li>
<li style="color: #e74c3c"><code>Fixed</code> The Edit with PBS button (in the backend) messes up the URL sometimes because of escaping.</li>
<li style="color: #e74c3c"><code>Fixed</code> After changing the column width, the corresponding class is now properly removed.</li>
<li style="color: #e74c3c"><code>Fixed</code> When clicking the resize handles of an image, the toolbar overlaps with the size indicator unless moved.</li>
<li style="color: #e74c3c"><code>Fixed</code> Better showing & hiding of overlays for better performance.</li>
<li style="color: #e74c3c"><code>Fixed</code> Bullet buttons are no longer enabled when non-text elements are selected.</li>
					</ul>
				</div>
			</div>
			<?php
		}


		/**
		 * Redirect to our welcome page after activation.
		 *
		 * @since 3.2
		 *
		 * @param string $plugin The path to the plugin that was activated.
		 */
		public function redirect_to_welcome_page( $plugin ) {
			if ( plugin_basename( PBS_FILE ) === $plugin ) {
				wp_redirect( esc_url( admin_url( 'admin.php?page=page-builder-sandwich' ) ) );
				die();
			}
		}
	}
}

new PBSAdminWelcome();
