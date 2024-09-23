<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! function_exists( 'qode_wishlist_for_woocommerce_add_mailchimp_script' ) ) {
	/**
	 * Function add mailichim script
	 */
	function qode_wishlist_for_woocommerce_add_mailchimp_script() {
		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters
		wp_enqueue_script( 'mailchimp', QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_URL_PATH . '/inc/admin-pages/options-custom-pages/help/assets/plugins/mailchimp/mailchimp.min.js', array( 'jquery' ), false, true );
	}

	add_action( 'qode_wishlist_for_woocommerce_action_additional_scripts_on_options_page_help', 'qode_wishlist_for_woocommerce_add_mailchimp_script' );
}