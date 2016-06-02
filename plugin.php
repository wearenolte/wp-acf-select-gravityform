<?php namespace Lean\Acf\Types\Gravity;
/*
Plugin Name: Advanced Custom Fields: Gravity Forms extension
Plugin URI: https://github.com/moxie-lean/wp-acf-select-gravityform
Description: ACF Type that allow to have a custom gravity form type
Version: 0.1.0
Author: Moxie
Author URI: http://getmoxied.net/
*/


$url = plugin_dir_url( __FILE__ );
$path = plugin_dir_path( __FILE__ );
$autoload = $path . 'vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $path . 'vendor/autoload.php';
}
new Select( $url, $path );
