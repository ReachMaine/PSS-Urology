<?php
/* woocommerce */
	add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

	function woo_remove_product_tabs( $tabs ) {

		// unset( $tabs['description'] );      	// Remove the description tab
		// unset( $tabs['reviews'] ); 			// Remove the reviews tab
		unset( $tabs['additional_information'] );  	// Remove the additional information tab

		return $tabs;

	}
	// remove sku from product details.
	add_filter( 'wc_product_sku_enabled', '__return_false' );

	// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

// remove related products from single products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
