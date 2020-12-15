<div class="woocommerce_archive_layouts">
  <?php

  $term = get_queried_object();

  // Pages are built by the user with flexible modules.
  // Module template files can be found in the theme folder _modules/
  // ACF Module ID and Module file name must equate

  if (have_rows('templates', $term)) :

    // loop through the rows of data
    while (have_rows('templates', $term)) : the_row();

      // Define the template to load
      $template = get_row_layout();
      // Load template.
      get_template_part('templates/' . $template);

    endwhile;

  endif;
   
  ?>
</div>
