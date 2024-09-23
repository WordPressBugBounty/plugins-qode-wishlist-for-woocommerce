<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
class Qode_Wishlist_For_WooCommerce_Framework_Options_Attribute extends Qode_Wishlist_For_WooCommerce_Framework_Options {

	public function __construct() {
		parent::__construct();

		add_action( 'init', array( $this, 'init_attribute_fields' ) );
		add_action( 'woocommerce_after_add_attribute_fields', array( $this, 'attribute_fields_display_add' ) );
		add_action( 'woocommerce_after_edit_attribute_fields', array( $this, 'attribute_fields_display_edit' ) );
		add_action( 'woocommerce_attribute_added', array( $this, 'save_attribute_fields' ) );
		add_action( 'woocommerce_attribute_updated', array( $this, 'save_attribute_fields' ) );

		// 5 is set to be same permission as Gutenberg plugin have.
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_framework_user_scripts' ), 5 );
	}

	public function init_attribute_fields() {
		do_action( 'qode_wishlist_for_woocommerce_action_framework_custom_attribute_fields' );
	}

	public function attribute_fields_display_add() {
		$params                = array();
		$params['this_object'] = $this;
		$params['type']        = 'product-attribute';
		$params['layout']      = 'div';
		qode_wishlist_for_woocommerce_framework_template_part( QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_PATH, 'inc/common', 'modules/attribute/templates/holder', '', $params );
	}

	public function attribute_fields_display_edit() {
		$params                = array();
		$params['this_object'] = $this;
		$params['type']        = 'product-attribute';
		$params['layout']      = 'table';
		qode_wishlist_for_woocommerce_framework_template_part( QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_PATH, 'inc/common', 'modules/attribute/templates/holder', '', $params );
	}

	public function save_attribute_fields( $id ) {
		foreach ( $this->get_options() as $key => $value ) {
			// phpcs:ignore WordPress.Security.NonceVerification, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
			$value  = array_key_exists( $key, $_POST ) ? wp_unslash( $_POST[ $key ] ) : '';
			$option = $key . '-' . strval( $id );

			if ( ( ! empty( $value ) || '0' === $value || 0 === $value ) && '' !== trim( $value ) ) {
				update_option( $option, sanitize_text_field( wp_unslash( $value ) ) );
			} else {
				delete_option( $option );
			}
		}
	}

	public function enqueue_framework_user_scripts( $hook ) {
		if ( 'product_page_product_attributes' === $hook ) {
			$this->enqueue_dashboard_framework_scripts();
		}
	}
}
