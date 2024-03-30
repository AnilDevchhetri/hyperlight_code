<?php function brisha_room_function() //post type(sear in google for more details)
 {
 
  $labels = array(
        'name'           => 'Products',
        'singular_name'  =>'Product',
        'menu_name'      =>'Product',
        
        'add_new'   =>'Add Product'
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('brisha_room'),
        'labels'   =>$labels,
        'supports' =>array('title','editor','thumbnail','excerpt'),
       'menu_icon' => 'dashicons-store',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
         
  );
  register_post_type('products',$args);
 }
 add_action('init','brisha_room_function');

