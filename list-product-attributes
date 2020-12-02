<?php 

add_filter( 'woocommerce_before_single_product_summary', 'tft_list_product_attributes', 2 );
function tft_list_product_attributes() {

    global $product;
    if ( $product->is_type( 'variable' ) ) {
        
      // Get product attributes
      $attributes = $product->get_attributes();

      foreach ( $attributes as $attribute ) {

              echo $attribute['name'] . ": ";
              $product_attributes = array();
              $product_attributes = explode('|',$attribute['value']);
              $attributes_list = '<ul>';
              foreach ( $product_attributes as $product_attribute ) {
                  $attributes_list .= '<li>' . $product_attribute . '</li>';
              }
              $attributes_list .= '</ul>';
              echo $attributes_list;
      }

    }
}
