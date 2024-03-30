<?php 
/**
*
*/

  function ppt_pricing_table_metabox_enqueue() {

    wp_enqueue_media();

  	wp_enqueue_style( 'metabox-style-anil', get_template_directory_uri() . '/fun/pine-price/css/style.css',false,'','all');

  	wp_enqueue_script( 'metabox-js-anil', get_template_directory_uri() . '/fun/pine-price/js/script.js',array('jquery'),'1.0',true);
  }
  add_action('admin_enqueue_scripts','ppt_pricing_table_metabox_enqueue');