<?php
/**
 * Plugin Name:       User Age Calculator
 * Plugin URI:        https://websolutionideas.com/
 * Description:       Allows website users to calculate their age by providing a birth date.
 * Version:           1.0.5
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Author:            Vikas Sharma
 * Author URI:        https://websolutionideas.com/vikas/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       user-age-calculator
 *
 * User Age Calculator
 * Copyright (C) 2024, Vikas Sharma <vikas@websolutionideas.com>
 *
 * 'User Age Calculator' is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * 'User Age Calculator' is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with 'User Age Calculator'. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 *
 */

// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

class User_Age_Calculator {

	static $plugin_name     = 'User Age Calculator';
	static $plugin_slug     = 'user-age-calculator';
	public $error_message   = '';
	public $success_message = '';

	public function __construct() {

		if ( is_admin() ) {
			// Activation and Deactivation hooks
			register_activation_hook( __FILE__, [ $this, 'plugin_activation' ] );
			register_deactivation_hook( __FILE__, [ $this, 'plugin_deactivation' ] );
			add_action( 'admin_init', [ $this, 'do_activation_redirect' ] );
			add_action( 'admin_menu', [ $this, 'create_admin_menu' ] );
			add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts_and_styles' ] );
			add_action( 'admin_notices', [ $this, 'notice_welcome' ] );
			
			$plugin = plugin_basename(__FILE__);
			add_filter( "plugin_action_links_$plugin", [ $this, 'plugin_settings_link' ] );
		}

		// Add shortcode
		add_shortcode( 'user-age-calculator', [ $this, 'user_age_calculator_shortcode' ] );
	}

	/**
	 * Activate the plugin
	 */
	public function plugin_activation() {
		set_transient( 'uac_activation_redirect_transient', true, 30 );
	}

	/**
	 * Deactivate the plugin
	 */
	public function plugin_deactivation() {
		// To Do:
	}

	public function do_activation_redirect() {
		// Bail if no activation redirect
		if ( ! get_transient( 'uac_activation_redirect_transient' ) ) {
			return;
		}

		// Delete the redirect transient
		delete_transient( 'uac_activation_redirect_transient' );

		// Bail if activating from network, or bulk
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
			return;
		}

		// Redirect to plugin page
		wp_safe_redirect( add_query_arg( array( 'page' => self::$plugin_slug ), admin_url( 'options-general.php' ) ) );
	}

	/**
	 * Add menu item in the admin area.
	 */
	public function create_admin_menu() {
		add_submenu_page( 'options-general.php', self::$plugin_name, self::$plugin_name, 'manage_options', self::$plugin_slug, [ $this, 'admin_panel' ] );
	}

	/**
	 * Plugin settings link.
	 * @param $links
	 * @return mixed
	 */
	public function plugin_settings_link( $links ) {
		$settings_link = sprintf( '<a href="options-general.php?page=%s">Settings</a>', self::$plugin_slug );

		array_unshift($links, $settings_link);
		return $links;
	}

	/**
	 * Enqueue CSS for ou plugin in admin area.
	 */
	public function enqueue_admin_scripts_and_styles(){
		wp_enqueue_style( 'uac-styles', plugin_dir_url( __FILE__ ) . "assets/css/styles.css", [], '1.0.5' );
		wp_enqueue_style('uac_admin_style', plugin_dir_url(__FILE__) . 'assets/css/admin-styles.css', [], '1.0.5');
		wp_enqueue_style( 'wp-color-picker' );

		wp_enqueue_script( 'uac-scripts', plugin_dir_url( __FILE__ ) . "assets/js/scripts.js", ['jquery'], '1.0.5', true );
		wp_enqueue_script( 'uac_admin_script', plugin_dir_url(__FILE__) . 'assets/js/admin-scripts.js', ['jquery', 'wp-color-picker'], '1.0.5', true );
	}

	/**
	 * Display welcome messages
	 */
	public function notice_welcome() {
		global $pagenow;

		if ( 'options-general.php' === $pagenow && isset( $_GET['page'] ) && self::$plugin_slug === $_GET['page'] ) {
			if ( ! get_option( 'uac_welcome' ) ) {
				?>
				<div class="notice notice-success is-dismissible">
					<p><?php echo __( 'Thank you for installing user age calculator.', 'user-age-calculator' ) ?></p>
				</div>
				<?php
				update_option( 'uac_welcome', 1 );
			}
		}
	}

	public function admin_panel(){
		if ( ! current_user_can( 'administrator' ) ) {
			echo '<p>' . __( 'Sorry, you are not allowed to access this page.', 'user-age-calculator' ) . '</p>';
			return;
		}

		$active_tab = 1;

		// if the form was submitted
		if ( isset( $_POST[ self::$plugin_slug . '-nonce' ] ) ) { // Input var okay.

			// Verify the nonce before proceeding.
			if ( wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ self::$plugin_slug . '-nonce' ] ) ), self::$plugin_slug ) ) { // Input var okay.

				// Update data
				$widget_options = [
					'uac_title1'              => ! empty( $_POST['uac_title1'] ) ? sanitize_text_field( $_POST['uac_title1'] ) : '',
					'uac_title1_font_size'    => ! empty( $_POST['uac_title1_font_size'] ) ? sanitize_text_field( $_POST['uac_title1_font_size'] ) : '',
					'uac_title1_color'        => ! empty( $_POST['uac_title1_color'] ) ? sanitize_text_field( $_POST['uac_title1_color'] ) : '',
					'uac_label1'              => ! empty( $_POST['uac_label1'] ) ? sanitize_text_field( $_POST['uac_label1'] ) : '',
					'uac_label1_font_size'    => ! empty( $_POST['uac_label1_font_size'] ) ? sanitize_text_field( $_POST['uac_label1_font_size'] ) : '',
					'uac_label1_color'        => ! empty( $_POST['uac_label1_color'] ) ? sanitize_text_field( $_POST['uac_label1_color'] ) : '',
					'uac_dropdown1_font_size' => ! empty( $_POST['uac_dropdown1_font_size'] ) ? sanitize_text_field( $_POST['uac_dropdown1_font_size'] ) : '',
					'uac_dropdown1_color'     => ! empty( $_POST['uac_dropdown1_color'] ) ? sanitize_text_field( $_POST['uac_dropdown1_color'] ) : '',
					'uac_show_time1'          => ! empty( $_POST['uac_show_time1'] ) ? sanitize_text_field( $_POST['uac_show_time1'] ) : '',
					'uac_show_h1'             => ! empty( $_POST['uac_show_h1'] ) ? sanitize_text_field( $_POST['uac_show_h1'] ) : '',
					'uac_show_f1'             => ! empty( $_POST['uac_show_f1'] ) ? sanitize_text_field( $_POST['uac_show_f1'] ) : '',
					'uac_show_b1'             => ! empty( $_POST['uac_show_b1'] ) ? sanitize_text_field( $_POST['uac_show_b1'] ) : '',
					'uac_border1_color'       => ! empty( $_POST['uac_border1_color'] ) ? sanitize_text_field( $_POST['uac_border1_color'] ) : '',
					'uac_bgcolor1'            => ! empty( $_POST['uac_bgcolor1'] ) ? sanitize_text_field( $_POST['uac_bgcolor1'] ) : '',
					'uac_hf_bgcolor1'         => ! empty( $_POST['uac_hf_bgcolor1'] ) ? sanitize_text_field( $_POST['uac_hf_bgcolor1'] ) : '',
					'uac_title2'              => ! empty( $_POST['uac_title2'] ) ? sanitize_text_field( $_POST['uac_title2'] ) : '',
					'uac_title2_font_size'    => ! empty( $_POST['uac_title2_font_size'] ) ? sanitize_text_field( $_POST['uac_title2_font_size'] ) : '',
					'uac_title2_color'        => ! empty( $_POST['uac_title2_color'] ) ? sanitize_text_field( $_POST['uac_title2_color'] ) : '',
					'uac_label21'             => ! empty( $_POST['uac_label21'] ) ? sanitize_text_field( $_POST['uac_label21'] ) : '',
					'uac_label21_font_size'   => ! empty( $_POST['uac_label21_font_size'] ) ? sanitize_text_field( $_POST['uac_label21_font_size'] ) : '',
					'uac_label21_color'       => ! empty( $_POST['uac_label21_color'] ) ? sanitize_text_field( $_POST['uac_label21_color'] ) : '',
					'uac_label22'             => ! empty( $_POST['uac_label22'] ) ? sanitize_text_field( $_POST['uac_label22'] ) : '',
					'uac_label22_font_size'   => ! empty( $_POST['uac_label22_font_size'] ) ? sanitize_text_field( $_POST['uac_label22_font_size'] ) : '',
					'uac_label22_color'       => ! empty( $_POST['uac_label22_color'] ) ? sanitize_text_field( $_POST['uac_label22_color'] ) : '',
					'uac_dropdown2_font_size' => ! empty( $_POST['uac_dropdown2_font_size'] ) ? sanitize_text_field( $_POST['uac_dropdown2_font_size'] ) : '',
					'uac_dropdown2_color'     => ! empty( $_POST['uac_dropdown2_color'] ) ? sanitize_text_field( $_POST['uac_dropdown2_color'] ) : '',
					'uac_show_time2'          => ! empty( $_POST['uac_show_time2'] ) ? sanitize_text_field( $_POST['uac_show_time2'] ) : '',
					'uac_show_h2'             => ! empty( $_POST['uac_show_h2'] ) ? sanitize_text_field( $_POST['uac_show_h2'] ) : '',
					'uac_show_f2'             => ! empty( $_POST['uac_show_f2'] ) ? sanitize_text_field( $_POST['uac_show_f2'] ) : '',
					'uac_show_b2'             => ! empty( $_POST['uac_show_b2'] ) ? sanitize_text_field( $_POST['uac_show_b2'] ) : '',
					'uac_border2_color'       => ! empty( $_POST['uac_border2_color'] ) ? sanitize_text_field( $_POST['uac_border2_color'] ) : '',
					'uac_bgcolor2'            => ! empty( $_POST['uac_bgcolor2'] ) ? sanitize_text_field( $_POST['uac_bgcolor2'] ) : '',
					'uac_hf_bgcolor2'         => ! empty( $_POST['uac_hf_bgcolor2'] ) ? sanitize_text_field( $_POST['uac_hf_bgcolor2'] ) : '',
				];

				if ( ! empty( $_POST['uac-reset-button'] ) ) {
					// if reset button was clicked.
					delete_option( 'uac_widget_options' );
				} else {
					// save widget settings data.
					update_option( 'uac_widget_options', $widget_options );
				}

				echo '<div class="notice notice-success is-dismissible"><p>' . __( 'Success! data saved successfully.', 'user-age-calculator' ) . '</p></div>';

			} else {
				echo '<div class="notice notice-error is-dismissible"><p>' . __( 'Error: Invalid nonce, data not saved, please try again!', 'user-age-calculator' ) . '</p></div>';
			}
		}

		// Display the plugin page
		include_once( __DIR__ . '/templates/admin-panel.php' );
	}

	public function user_age_calculator_shortcode( $atts ) {
		if ( empty( $atts['template'] ) ) {
			return '';
		}

		wp_enqueue_style( 'uac-styles', plugin_dir_url( __FILE__ ) . "/assets/css/styles.css" );
		wp_enqueue_script( 'uac-scripts', plugin_dir_url( __FILE__ ) . "/assets/js/scripts.js", ['jquery'], '', true );

		ob_start();

		if ( 1 === intval( $atts['template'] ) ){
			require __DIR__ . '/templates/user-age-calculator-template1.php';
		} else {
			require __DIR__ . '/templates/user-age-calculator-template2.php';
		}

		return ob_get_clean();
	}
}

new User_Age_Calculator();
