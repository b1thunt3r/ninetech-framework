<?php
/*
Plugin Name: Ninetech Framework
Plugin URI: http://www.ninetech.com
Description: Coming soon
Author: Sebastian Brand
Text Domain: ninetech-framework
Domain Path: /languages/
Version: 1.0.0
*/

define( 'NF_VERSION', '1.0.0' );
define( 'NF_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'NF_PLUGIN_NAME', trim( dirname( NF_PLUGIN_BASENAME ), '/' ) );
define( 'NF_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'NF_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );

include_once NF_PLUGIN_DIR . '/autoloader.php';