<?php 

namespace Codeware\OC;

class Plugin{
	public static function init(){
		add_action( 'plugins_loaded', [ __CLASS__, 'on_plugins_loaded' ] );
		add_action( 'wp_enqueue_scripts', [ __NAMESPACE__ . '\Enqueue', 'init' ] );
	}

	public static function on_plugins_loaded() {
		if( class_exists( '\OxygenElement' ) ){
			add_action( 'init', [ __NAMESPACE__ . '\Elements', 'init' ] );
		}
	}
}
