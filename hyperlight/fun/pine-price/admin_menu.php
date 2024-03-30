<?php 
/**
 * @package Pines-pricing-tables
 */

 class ppt_pines_pricing_tables
{
    function __construct()
    {
      //action hook for adding admin menu
        add_action('admin_menu',array($this,'ppt_pricing_table_admin_menu'));
        add_action('init',array($this,'ppt_pricing_table_custom_post_callback'));
    }
    
    //Call back function for adming menu
    function ppt_pricing_table_admin_menu()
    {
        add_menu_page(
            'pricing-tables',
            'Pricing Tables',
            'manage_options',
            'ppt-price-tables',
            false, // Callback, leave empty
            'dashicons-money-alt',
            50 // Position
        );

        add_submenu_page(
          'ppt-price-tables', // Parent slug
          'Add Table', // Page title
          'Add Table', // Menu title
          'manage_options', // Capability
          'post-new.php?post_type=ppt_prices',  // Slug
          false // Function
      );
    }//end of ppt_pricing_table_admin_menu function

  // Call back funtion for pricing table custom post type
  function ppt_pricing_table_custom_post_callback(){
    $labels = array(
        'name'               => ( 'Pine Price Table' ),
        'singular_name'      => ( 'Price Table' ),
        'add_new'            => (  'Add Table' ),
        'add_new_item'       => ( 'Add New Price' ),
        'edit_item'          => ( 'Edit Table' ),
        'new_item'           => ( 'New  Table' ),
        'all_items'          => ( 'All Prices' ),
        'view_item'          => ( 'View Prices ' ),
        'search_items'       => ( 'Search Table' ),
        'not_found'          => ( 'No Table found' ),
        'not_found_in_trash' => ( 'No Table found in the Trash' ), 
       
        'menu_name'          => 'Price Table',
        
      );
      $args = array(
        'labels'        => $labels,
        'public'        => false,
        'description'   => 'List of prices tables',
        'menu_position' => 5,
        'supports'      => array( 'title' ),
        'has_archive'   => true,
        'show_in_menu' => 'ppt-price-tables',
        'show_ui' => true,
        
      );
      register_post_type( 'ppt_prices', $args );
  }//end of ppt_pricing_table_custom_post_callback function
    
}//End of Main class

if(class_exists('ppt_pines_pricing_tables')){
     
    $ppp_price_table = new ppt_pines_pricing_tables();
}

 ///////////////////////////////////Adding custom menu///////////////////////////////


require_once(TEMPLATEPATH. '/fun/pine-price/metabox.php');
require_once(TEMPLATEPATH. '/fun/pine-price/admin_enqueue.php');