<?php 
/* ===============================================
    Set variable price to only show from price 
=============================================== */

add_filter('woocommerce_variable_price_html','ftf_shop_variable_product_price', 10, 2 );

function ftf_shop_variable_product_price( $price, $product ){
    
    if(!is_single($product->get_id())) {
        // Display From: Price on archive pages. 
        $variation_min_reg_price = $product->get_variation_regular_price('min', true);

        if(!empty($variation_min_reg_price)) {
          echo 'From: ' ; 
            $price = woocommerce_price( $variation_min_reg_price );
        }
        else {
            $price = woocommerce_price( $product->regular_price );
        }

        return $price;
        
    else {
        // display regular pricing on product single pages. 
        return $price;
    }
}
