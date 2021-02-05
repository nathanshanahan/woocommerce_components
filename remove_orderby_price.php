<?php 
/* ===============================================
    Remove Order by price options from sorting.
=============================================== */
function csf_catalog_orderby( $orderby ) {
    unset($orderby["price"]);
    unset($orderby["price-desc"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "csf_catalog_orderby", 20 );
