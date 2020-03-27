<?php
/**
 * Plugin Name: WooCommerce Dynamic Menu Category
 * Plugin URI: https://www.devute.com/wordpress/free-plugin/woo-dynamic-menu-category
 * Description: Free WooCommerce automatic category menu. You can easily load your wooCommerce Categtory in your navigation menu or anywhere.
 * Author: Numan
 * Author URI: https://www.numanhussain.com
 * Version: 1.0.0
 * License: GPLv2 or Later
 * Text Domain: wdmc
 * Domain path: languages
 */


if(!defined(ABSPATH)){
  die("Access denied");
} 

function wdmc_activation_hook(){
  // start coding from here
}
register_activation_hook(__FILE__, "wdmc_activation_hook");

function wdmc_deactivation_hook(){

}
register_deactivation_hook(__FILE__, "wdmc_deactivation_hook");
