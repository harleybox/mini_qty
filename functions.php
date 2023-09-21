<?php
function woocommerce_product_add_to_cart_quantity_validation( $quantity, $product ) {
	// 获取产品的自定义字段值
	$multiplier = get_post_meta( $product->get_id(), '_multiplier', true );

	// 如果倍数为 2，则限制输入值为 2 的倍数
	if ( $multiplier == 2 ) {
		$quantity = max( 1, (int) $quantity % 2 );
	}

	return $quantity;
}

add_filter( 'woocommerce_product_add_to_cart_quantity', 'woocommerce_product_add_to_cart_quantity_validation', 10, 2 );
error_log('111hhh');