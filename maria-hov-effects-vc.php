<?php
/*
Plugin Name: Maria Hover effects - Visual Composer Extension
Plugin URI: http://codecans.com/items/hover-effects-for-visual-composer-pro/
Description: Maria Image Hover Effects – Visual Composer Extension is an amazing plugin that will allow user to add 55+ hover effects to images with captions.This add-on add 20 circle and 15 square CSS3 transitions of hover thumbnail to the Visual Composer. Most of the transitions have 4 type of directions, thumbnail support lightbox or custom link, give user a lot of flexibility to add a grid gallery.
Author: Codecans
Author URI: http://codecans.com/
License: GPLv2 or later
Text Domain: mhevc
Version: 1.0.4
*/

// Don't load directly
if (!defined('ABSPATH')){die('-1');}


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ){
    
/* Constants */
define( 'MHEVC_URL_PATH', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'MHEVC_DIR_PATH', rtrim( plugin_dir_path( __FILE__ ), '/' ) );

if ( ! function_exists( 'vce_WordPressCheckup' ) ) {
    function vce_WordPressCheckup( $version = '3.8' ) {
        global $wp_version;
        if ( version_compare( $wp_version, $version, '>=' ) ) {
            return "true";
        } else {
            return "false";
        }
    }
}


// Admin Style CSS
function mhevc_admin_enqeue() {
    
    wp_enqueue_style( 'mhevc_admin_css', plugins_url( 'css/admin.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'mhevc_admin_enqeue' );


//Loading CSS
function mhevc_hover_effects_vc_style() {

    wp_enqueue_style('mhevc_ihover', plugins_url( 'css/ihover.css' , __FILE__ ) );
    wp_enqueue_style('mhevc_square2', plugins_url( 'css/mhevc-sqr2.css' , __FILE__ ) );
    wp_enqueue_style('mhevc_caption', plugins_url( 'css/mhevc-caption.css' , __FILE__ ) );
    wp_enqueue_style('mhevc_custom', plugins_url( 'css/mhevc-custom.css' , __FILE__ ) );
    
}
add_action( 'wp_enqueue_scripts', 'mhevc_hover_effects_vc_style' );



//params
require_once 'admin/param.php';



// Shortcodes
require_once 'shortcode/shortcode.php';
//require_once 'admin/custom-param.php';
}
    
// Check If VC is activate
else {
    function mhevc_required_plugin() {
        if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
            add_action( 'admin_notices', 'mhevc_required_plugin_notice' );

            deactivate_plugins( plugin_basename( __FILE__ ) ); 

            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
        }

    }
add_action( 'admin_init', 'mhevc_required_plugin_notice' );

    function mhevc_required_plugin_notice(){
        ?><div class="error"><p>Error! you need to install or activate the <a target="_blank" href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=Rakibur_Rahman_Sagar">Visual Composer</a> plugin to run "<span style="font-weight: bold;">Maria Hover Effects For Visual Composer</span>" plugin.</p></div><?php
    }
}