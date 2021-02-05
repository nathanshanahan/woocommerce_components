<?php 

/* ===============================================
    Hide variations that are out of stock 
=============================================== */
/**
 * Disable out of stock variations
 *
 * @param bool $active
 * @param WC_Product_Variation $variation
 *
 * @return Boolean
 */
function tft_variation_is_active( $active, $variation ) {
	if( ! $variation->is_in_stock() ) {
		return false;
	}

	return $active;
}

add_filter( 'woocommerce_variation_is_active', 'tft_variation_is_active', 10, 2 );
