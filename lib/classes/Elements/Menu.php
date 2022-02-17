<?php 
namespace Codeware\OC\Elements;
use Codeware\OC\Enqueue;

class Menu extends \OxyEl {

	public function afterInit() {
		$this->removeApplyParamsButton();
	}
	
	public function name() {
		return 'Minimal Menu';
	}

	public function slug() {
		return 'oc-menu';
	}

	public function render($options, $defaults, $content) {
		$menuId = isset( $options['menuId'] ) ? esc_attr($options['menuId']) : '';
		echo wp_nav_menu(['menu' => $menuId]);
	}

	public function defaultCSS() {
		return ''; //file_get_contents( CODEWARE_OVV_PATH . '/assets/css/youtube.css' );
	}

	public function controls() {
		$this->addOptionControl(
			[
				'type' => 'textfield',
				'name' => __('Menu id or slug'),
				'slug' => 'menuId',
			]
		)->rebuildElementOnChange();
	}
}
