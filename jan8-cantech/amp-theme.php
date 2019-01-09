<?php
/*
Plugin Name: AMP Theme Framework
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Create AMP Themes easily with help of AMP Framework
Version: 1.0
Author: AMPforWP Team
Author URI: http://ampforwp.com/amp-theme-framework
License: GPL2
AMP: Cantech AMP Theme 
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


function swifttheme_footer_widgets_init_called() {
 	//if(ampforwp_design_selector()==4){
	    register_sidebar( array(
	        'name' => __( 'AMP Footer', 'accelerated-mobile-pages' ),
	        'id' => 'swift-footer-widget-area',
	        'description' => __( 'The Swift footer widget area', 'accelerated-mobile-pages' ),
	        'class'=>'w-bl',
	        'before_widget' => '<div class="w-bl">',
	        'after_widget' => '</div>',
	        'before_title' => '<h4>',
	        'after_title' => '</h4>',
	    ) );
	    register_sidebar( array(
	        'name' => __( 'AMP Sidebar', 'accelerated-mobile-pages' ),
	        'id' => 'swift-sidebar',
	        'description' => __( 'The Swift Sidebar', 'accelerated-mobile-pages' ),
	        'class'=>'amp-sidebar',
	        'before_widget' => '<div class="amp-sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h4>',
	        'after_title' => '</h4>',
	    ) );
	//}
}
add_action( 'plugins_loaded', 'swifttheme_footer_widgets_init_called' );
