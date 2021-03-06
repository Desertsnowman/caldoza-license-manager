<?php
/**
 * CLDZA_LMAN Control
 *
 * @package   controls
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */
namespace caldoza\ui\control;

/**
 * WordPress Color picker
 *
 * @since 1.0.0
 */
class color extends \caldoza\ui\control\text {

	/**
	 * The type of object
	 *
	 * @since       1.0.0
	 * @access public
	 * @var         string
	 */
	public $type = 'color';


	/**
	 * Define core CLDZA_LMAN scripts - override to register core ( common scripts for caldoza type )
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function set_assets() {

		// set style
		$this->assets['style'][] = 'wp-color-picker';

		// push to register script
		$this->assets['script'][]                     = 'wp-color-picker';
		$this->assets['script']['color-control-init'] = array(
			'src'       => $this->url . 'assets/controls/color/js/color' . CLDZA_LMAN_ASSET_DEBUG . '.js',
			'in_footer' => true,
		);

		parent::set_assets();
	}

	/**
	 * Gets the attributes for the control.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function set_attributes() {

		parent::set_attributes();
		$this->attributes['class'] = 'color-field';

	}

	/**
	 * Returns the main input field for rendering
	 *
	 * @since 1.0.0
	 * @see \caldoza\ui\caldoza
	 * @access public
	 * @return string Input field HTML string
	 */
	public function input() {

		return '<input type="text" value="' . esc_attr( $this->get_value() ) . '" ' . $this->build_attributes() . '>';
	}

}
