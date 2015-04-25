<?php 
/* 
 * clean_admin_widgets.php
 * Clean wordpress admin widgets on /wp-admin/widgets.php
 *
 */
add_action( 'widgets_init', 'vk_unregister_widgets' );
function vk_unregister_widgets(){
 ###Default wordpress
 //unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Nav_Menu_Widget');
  
  
  ### layer slider
  unregister_widget('LayerSlider_Widget');
  
  ### Woocommerce
  unregister_widget( 'WC_Widget_Products' );
  unregister_widget( 'WC_Widget_Recent_Products' );
  unregister_widget( 'WC_Widget_Featured_Products' );
  unregister_widget( 'WC_Widget_Product_Categories' );
  unregister_widget( 'WC_Widget_Product_Tag_Cloud' );
  unregister_widget( 'WC_Widget_Cart' );
  unregister_widget( 'WC_Widget_Layered_Nav' );
  unregister_widget( 'WC_Widget_Layered_Nav_Filters' );
  unregister_widget( 'WC_Widget_Price_Filter' );
  unregister_widget( 'WC_Widget_Product_Search' );
  unregister_widget( 'WC_Widget_Top_Rated_Products' );
  unregister_widget( 'WC_Widget_Recent_Reviews' );
  unregister_widget( 'WC_Widget_Recently_Viewed' );
  unregister_widget( 'WC_Widget_Best_Sellers' );
  unregister_widget( 'WC_Widget_Onsale' );
  unregister_widget( 'WC_Widget_Random_Products' );
}

?>
