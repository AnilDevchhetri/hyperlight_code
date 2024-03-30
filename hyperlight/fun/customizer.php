<?php
//Editable box for header
function hyperlight_customization_box($wp_customize)
{
	 $wp_customize->add_section('hb-footer-box-section',array(
	      'title' => 'Footer Details',
	   ));

  $wp_customize->add_setting('hp-footer-shortdec-one',array(
  'default' => '',
   ));
  $wp_customize->add_setting('hp-footer-shortdec-two',array(
  'default' => '',
   ));
  $wp_customize->add_setting('hp-footer-phone-number',array(
  'default' => '+1 617 299 1203',
   ));
   $wp_customize->add_setting('hp-footer-email',array(
  'default' => 'info@hyperlightcorp.com',
   ));
   $wp_customize->add_setting('hp-footer-location',array(
  'default' => '501 MASSACHUSETTS AVENUE CAMBRIDGE,MA 02139, USA',
   ));
   $wp_customize->add_setting('hp-footer-google-map',array(
  'default' => '',
   ));
   $wp_customize->add_setting('hp-footer-twitter',array(
  'default' => '',
   ));
   $wp_customize->add_setting('hp-footer-linkedin',array(
  'default' => '',
   ));
   $wp_customize->add_setting('hp-footer-rights',array(
  'default' => '',
   ));

   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-shortdec-one',array(
    'label'           => 'Enter Footer First description',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-shortdec-one',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-shortdec-two',array(
    'label'           => 'Enter Footer second description',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-shortdec-two',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-phone-number',array(
    'label'           => 'Enter Phone Number',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-phone-number',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-email',array(
    'label'           => 'Enter Email',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-email',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-location',array(
    'label'           => 'Enter Location',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-location',
    )));
     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-google-map',array(
    'label'           => 'Enter Google map url',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-google-map',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-twitter',array(
    'label'           => 'Enter Twitter detail',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-twitter',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-linkedin',array(
    'label'           => 'Enter LinkedIn detail',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-linkedin',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-footer-control-rights',array(
    'label'           => 'Enter Rights details',
    'section'         =>'hb-footer-box-section',
    'settings'         =>'hp-footer-rights',
    )));


}
add_action('customize_register','hyperlight_customization_box');