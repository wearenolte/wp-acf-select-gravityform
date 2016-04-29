<?php namespace Lean\Acf\Types\Gravity;

/**
 * Setup configuration of the ACF fields form.
 */
class Acf_Field_Select_Form extends \acf_field {

	/**
	 *  This function will setup the field type data
	 */
	function __construct( $settings ) {
		/**
		 *  Single word, no spaces. Underscores allowed
		 */
		$this->name = 'SELECT_GRAVITY_FORMS';
		$this->label = 'Gravity Forms';
		$this->category = 'choice';
		$this->defaults = [];
		$this->l10n = [ 'error' => 'Select a valid option' ];
		$this->settings = $settings;

		parent::__construct();
	}

	/*
	 *  Create the HTML interface for your field
	 *
	 *  @param	$field (array) the $field being edited
	 *  @return	n/a
	 */
	function render_field( $field ) {
		Select_Field::render( $field );
	}

	/*
	 *  This filter is applied to the $value before it is saved in the db we make
	 *  sure we save an int value that is positive, 0 is going to be the default
	 *  value for non form so any value like null will be converted to 0.
	 *
	 *  @param	$value (mixed) the value found in the database
	 *  @param	$post_id (mixed) the $post_id from which the value was loaded
	 *  @param	$field (array) the field array holding all the field options
	 *  @return	$value
	 */
	function update_value( $value, $post_id, $field ) {
		return absint( $value );
	}

	/*
	 *  This filter is appied to the $value after it is loaded from the db and
	 *  before it is returned to the template. Make sure to return always an int
	 *  value since when it comes from the DB it comes as string like '1.
	 *
	 *  @param	$value (mixed) the value which was loaded from the database
	 *  @param	$post_id (mixed) the $post_id from which the value was loaded
	 *  @param	$field (array) the field array holding all the field options
	 *
	 *  @return	$value (mixed) the modified value
	 */
	function format_value( $value, $post_id, $field ) {
		return absint( $value );
	}
}
new Acf_Field_Select_Form( $this->settings );
?>
