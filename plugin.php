<?php
/*
Plugin Name: Shoestrap 3 Extra Widget Areas
Plugin URI: http://wpmu.io
Description: Adds some extra widget areas to the Shoestrap theme.
Version: 1.0
Author: Aristeides Stathopoulos
Author URI:  http://aristeides.com
Software Licensing Key: a06cff6b95b866f91e33acc2299c69a9
*/

// plugin folder url
if ( !defined( 'S3EWA_PLUGIN_URL' ) ) :
	define( 'S3EWA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
endif;

// plugin folder path
if ( !defined( 'S3EWA_PLUGIN_DIR' ) ) :
	define( 'S3EWA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
endif;

// plugin root file
if ( !defined( 'S3EWA_PLUGIN_FILE' ) ) :
	define( 'S3EWA_PLUGIN_FILE', __FILE__ );
endif;

if ( file_exists( get_template_directory() . '/lib/modules/load.modules.php' ) ) :
	require_once get_template_directory() . '/lib/modules/load.modules.php';
	include_once( S3EWA_PLUGIN_DIR . 'includes/admin.php' );
	include_once( S3EWA_PLUGIN_DIR . 'includes/functions.php' );
endif;