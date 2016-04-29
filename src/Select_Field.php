<?php namespace Lean\Acf\Types\Gravity;

/**
 * Definition of the markup of the field.
 */
class Select_Field {

	public static function render( $field ) {
		if ( ! class_exists( '\GFAPI' ) ) {
			self::error( 'Make sure you installed and activated Gravity Forms' );
			return;
		}
		$forms = \GFAPI::get_forms();
		if ( empty( $forms ) ) {
			self::error( 'You don\'t have any available forms.' );
			return;
		}
		self::select( $forms, $field );
	}

	protected static function error( $message ) {
	?>
		<strong><?php echo esc_html( $message ); ?></strong>
	<?php
	}

	protected static function select( $forms, $field ) {
	?>
		<select name="<?php echo esc_attr( $field['name'] ); ?>">
	<?php
		self::option();
		$selection = isset( $field['value'] ) ? absint( $field['value'] ) : 0;
		foreach ( $forms as $form ) {
			self::option([
				'value' => $form['id'],
				'label' => $form['title'],
				'selected' => $selection === $form['id'],
			]);
		}
	?>
		</select>
	<?php
	}

	protected static function option( $args = [] ) {
		$args = wp_parse_args( $args, [
			'selected' => false,
			'value' => 0,
			'label' => 'None',
		]);
		$selected = $args['selected'] ? 'selected' : '';
	?>
		<option value="<?php echo esc_attr( $args['value'] ); ?>" <?php echo esc_attr( $selected ); ?>>
			<?php echo esc_html( $args['label'] ); ?>
		</option>
	<?php
	}
}
