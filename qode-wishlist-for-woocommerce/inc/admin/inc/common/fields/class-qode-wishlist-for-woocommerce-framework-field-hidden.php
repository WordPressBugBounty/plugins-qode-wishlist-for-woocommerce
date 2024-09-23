<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

class Qode_Wishlist_For_WooCommerce_Framework_Field_Hidden extends Qode_Wishlist_For_WooCommerce_Framework_Field_Type {

	public function render_field() {
		?>
		<?php if ( ! empty( $this->args['custom_class'] ) ) : ?>
			<div <?php qode_wishlist_for_woocommerce_class_attribute( $this->args['custom_class'] ); ?>>
		<?php endif; ?>
		<input
				type="hidden" <?php echo qode_wishlist_for_woocommerce_get_inline_attrs( $this->data_attrs ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				class="qodef-field qodef-input" name="<?php echo esc_attr( $this->name ); ?>"
				value="<?php echo esc_attr( esc_html( $this->params['value'] ) ); ?>"
			<?php
			if ( isset( $this->args['readonly'] ) ) {
				echo ' readonly';
			}
			?>
		/>
		<?php if ( ! empty( $this->args['custom_class'] ) ) : ?>
			</div>
			<?php
		endif;
	}
}
