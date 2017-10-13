<?php
// ADD WRAPPER ID PRIMARY
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="primary">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

//REMOVE FILTER FOR PRODUCTS
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//WRAPPER FOR PRODUCTS
function woocommerce_start_row_wrapper(){
	echo '<p>';
}
function woocommerce_end_row_wrapper(){
	echo '</p>';
}
add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_start_row_wrapper',20 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_end_row_wrapper',3 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_start_row_wrapper',7 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_end_row_wrapper',15 );


//ADD THEME SUPORT
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
