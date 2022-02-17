<?php 

namespace Codeware\OC;

class Enqueue{
	public static function init(){
		self::register_scripts();
		self::register_styles();

		add_action('script_loader_tag', [ __CLASS__, 'script_loader_tag' ], 10, 3 );
		self::localize();
	}

	public static function register_scripts(){
		wp_register_script( 'ovv-youtube', 'https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.3.1/lite-youtube.min.js', [], '1.3.1', true );
		wp_register_script( 'ovv-vimeo', 'https://cdn.jsdelivr.net/npm/@slightlyoff/lite-vimeo@0.1.1/lite-vimeo.min.js', [], '0.1.1', true );
	}

	public static function register_styles(){
		//wp_register_style( 'ovv-youtube', CODEWARE_OVV_URL . '/assets/css/lite-youtube.min.css', [], '0.2.0', true );
	}

	public static function script_loader_tag( $tag, $handle, $src ) {
		$handles = [ 'ovv-youtube', 'ovv-vimeo' ];
		if( \in_array( $handle, $handles) ) {
			return '<script defer="defer" type="module" src="' . $src . '"></script>' . "\n";
		}

		return $tag;
	}

	public static function localize(){

	}

	/**
	 * @param array $handles Array of media handles
	 * @param string $types Media types 'script' or 'style'
	 */
	public static function enqueue_media($handles, $type = 'script') {

		if ($type === 'script') {
			foreach ($handles as $h) {
				wp_enqueue_script($h);
			}
			return;
		}

		// enqueue styles
		foreach ($handles as $h) {
			wp_enqueue_style($h);
		}
	}
}
