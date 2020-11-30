<?php 
/* ===============================================
    Display variations count. 
=============================================== */
add_filter( 'woocommerce_after_shop_loop_item_title', 'tft_variation_count', 2 );
function tft_variation_count() {
    global $product;
    if ( $product->is_type( 'variable' ) ) {
        $variations = $product->get_available_variations();
        $count      = count( $variations );
        echo '<span class="product-variations-count">' .$count. ' Sizes - </span>';
    }
}
