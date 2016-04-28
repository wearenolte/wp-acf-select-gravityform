<?php namespace Lean\Acf\Types\Gravity;

/**
 * Registration of the new select type
 */
class Select {
	/*
	*  __construct
	*/
	function __construct( $url, $path ) {
		$this->settings = [
			'version'	=> '0.0.1',
			'url'		=> $url,
			'path'		=> $path,
		];
		add_action( 'acf/include_field_types', [ $this, 'include_field_types' ] );
	}

	/*
	*  include_field_types
	*
	*  This function will include the field type class
	*
	*  @param	$version (int) major ACF version. Defaults to 5
	*  @return	n/a
	*/
	function include_field_types( $version = 5 ) {
		include_once( 'Select-Forms-v' . $version . '.php' );
	}
}
?>
