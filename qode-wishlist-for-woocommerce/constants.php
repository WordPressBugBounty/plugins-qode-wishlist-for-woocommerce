<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_VERSION', '1.2.3' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ABS_PATH', __DIR__ );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_REL_PATH', dirname( plugin_basename( __FILE__ ) ) );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_URL_PATH', plugin_dir_url( __FILE__ ) );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ASSETS_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_ABS_PATH . '/assets' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ASSETS_URL_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_URL_PATH . 'assets' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_INC_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_ABS_PATH . '/inc' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_INC_URL_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_URL_PATH . 'inc' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_INC_PATH . '/admin' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_URL_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_INC_URL_PATH . '/admin' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_ASSETS_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_PATH . '/core-pages/assets' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_ASSETS_URL_PATH', QODE_WISHLIST_FOR_WOOCOMMERCE_ADMIN_URL_PATH . '/core-pages/assets' );

define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_GENERAL_MENU_NAME', 'qode_woocommerce_general_menu' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_MENU_NAME', 'qode_wishlist_for_woocommerce_menu' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_OPTIONS_NAME', 'qode_wishlist_for_woocommerce_options' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_GUESTS_ITEMS', 'qode_wishlist_for_woocommerce_guests_items' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_PAGE_TEMPLATE', '_qode_wishlist_for_woocommerce_page_template' );
define( 'QODE_WISHLIST_FOR_WOOCOMMERCE_MARKET_URL', 'https://qodeinteractive.com/products/plugins/qode-wishlist-for-woocommerce/' );
