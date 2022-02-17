<?php
/**
 * Plugin Name:     Oxy Components
 * Plugin URI:      https://codeware.io
 * Description:    	
 * Author:          Sisir Adhikari
 * Author URI:      https://codeware.io
 * Text Domain:     oxy-components
 * Requires PHP: 5.4
 * Requires at least: 5.0
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         CODEWARE
 */
require_once __DIR__ . '/vendor/autoload.php';

use Codeware\OC\Plugin;

// defined required constants
define( 'CODEWARE_OC_URL', plugins_url( '', __FILE__ ) );
define( 'CODEWARE_OC_PATH', __DIR__ );
define( 'CODEWARE_OC_VERSION', '1.0.0');

// init plugin
Plugin::init();
