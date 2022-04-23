<?php 


// Remove Default Sorting 

add_action('wp', 'remove_default_sorting'); 

function remove_default_sorting() {
    
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30); 
    
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20); 

    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 30);

    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20); 
}


// add text in shop Page 

add_action('woocommerce_before_main_content', 'add_text'); 

function add_text() {

    if( is_shop()) {
        echo '<h1>Välkommen till AH-MORE SPORT:s</h1>'; 

    }
}

// Remove sideBar in single_product page 


function remove_storefront_sidebar() {

    if( is_product() || is_cart() || is_checkout() ) {

        remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    }

  }

  add_action( 'get_header', 'remove_storefront_sidebar' );






register_sidebar(
    [
        'name' => 'widget 1', 
        'id' => 'widget1',
        'description' => 'Widget till sidebar'
        
    ]
); 

register_sidebar(
    [
        'name' => 'widget 2', 
        'id' => 'widget2',
        'description' => 'Widget till footer'
        
    ]
); 


?> 