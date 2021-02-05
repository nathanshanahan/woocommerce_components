<?php 

/* ===============================================
    Add option to select product per page
=============================================== */
function csf_products_per_page()
{

  echo '<div class="woocommerce-items-per-page"><span>Display:</span>' ?>
<form action="" method="POST" name="results" class="woocommerce-products-per-page">
  <select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby"
    onchange="this.form.submit()">
    <?php

      //Get products on page reload
      if (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))) {
        $numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
      } else {
        $numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
      }

      //  Set the number per page options
      $shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
        //Add as many of these as you like, -1 shows all products per page
        //''    => __('Results per page', 'woocommerce'),
        '9'   => __('9', 'woocommerce'),
        '18'  => __('18', 'woocommerce'),
        '30'  => __('30', 'woocommerce'),
        '60'  => __('60', 'woocommerce'),
        '99' => __('100', 'woocommerce'),
        '-1'  => __('All', 'woocommerce'),
      ));

      foreach ($shopCatalog_orderby as $sort_id => $sort_name)
        echo '<option value="' . $sort_id . '" ' . selected($numberOfProductsPerPage, $sort_id, true) . ' >' . $sort_name . '</option>';
      ?>
  </select>
</form>

<?php echo ' </div>' ?>
<?php
}

// now we set our cookie if we need to
function csf_sort_by_page($count)
{
  if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
    $count = $_COOKIE['shop_pageResults'];
  }
  if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
    setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time() + 1209600, '/', get_home_url(), false); //this will fail if any part of page has been output- hope this works!
    $count = $_POST['woocommerce-sort-by-columns'];
  }
  // else normal page load and no cookie
  return $count;
}

add_filter('loop_shop_per_page', 'csf_sort_by_page');
add_action('woocommerce_before_shop_loop', 'csf_products_per_page', 20);
