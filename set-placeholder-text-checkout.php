<?php 
add_filter('woocommerce_checkout_fields', 'tft_set_placeholder_checkout_fields');
function tft_set_placeholder_checkout_fields($fields)
 {
  unset($fields['billing']['billing_address_2']);
   $fields['billing']['billing_company']['placeholder'] = 'Business Name';
   $fields['billing']['billing_company']['label'] = 'Business Name';
   $fields['billing']['billing_first_name']['placeholder'] = 'First Name'; 
   $fields['shipping']['shipping_first_name']['placeholder'] = 'First Name';
   $fields['shipping']['shipping_last_name']['placeholder'] = 'Surname';
   $fields['shipping']['shipping_company']['placeholder'] = 'Company Name'; 
   $fields['billing']['billing_last_name']['placeholder'] = 'Surname';
   $fields['billing']['billing_email']['placeholder'] = 'Email Address ';
   $fields['billing']['billing_phone']['placeholder'] = 'Phone ';
   return $fields;
 } 
?>
