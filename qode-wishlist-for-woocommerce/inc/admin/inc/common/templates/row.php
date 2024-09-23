<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-row-wrapper col-12 <?php echo esc_attr( $class ); ?>" <?php echo qode_wishlist_for_woocommerce_get_inline_attrs( $dependency_data, true ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="qodef-row-wrapper-inner">
		<div class="row">
			<?php
			$row_title = $this_object->get_title();
			if ( ! empty( $row_title ) ) {
				?>
				<h5 class="qodef-title qodef-row-title col-12"><?php echo esc_html( $row_title ); ?></h5>
			<?php } ?>
			<?php
			$row_description = $this_object->get_description();
			if ( ! empty( $row_description ) ) {
				?>
				<p class="qodef-description qodef-row-description col-12"><?php echo esc_html( $row_description ); ?></p>
			<?php } ?>
			<?php
			foreach ( $this_object->get_children() as $child ) {
				$child->render();
			}
			?>
		</div>
	</div>
</div>
