<?php 
/*
Plugin Name: WSR fullscreen menu
Plugin URI: http://websector.com
Description: 
Version: 1.0.0
Author: WSR
Author URI: http://websector.com
License: A short license name. Example: GPL2

***How to use: ***
do_action( 'wsr_show_fullscreen_menu');
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
class WSR_fullscreen_menu{
    var $settings;
    public function __construct(){
        //plugin settings
        $this->settings = array(
            'path'  =>  plugins_url() . '/wsr-fullscreen-menu',
            'dir'   => dirname( __FILE__ )
        );

        add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_scripts' ) );
        add_action( 'wsr_show_fullscreen_menu', array( $this, 'show_menu' ) );
    }

    /***********************************************************
     *  Register scritps for plugins
     */
    function register_plugin_scripts(){
        if (!is_admin()){
            wp_enqueue_style( 'wsr-plugin-css', $this->settings['path'] . '/wsrfsm.css' );
            wp_enqueue_script( 'wsr-plugin-js', $this->settings['path'] . '/wsrfsm.js', array('jquery'), '1', true );
        }
    }

    function show_menu(){
         include('wsr-fullscreen-menu-view.php');
    }
}

$wsr_fullscreen_menu = new WSR_fullscreen_menu();