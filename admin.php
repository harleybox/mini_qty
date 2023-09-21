<?php
// 添加自定义字段
function woocommerce_add_product_multiplier_field() {
	// 添加自定义字段
	add_meta_box(
		'_multiplier',
		__( '购买倍数', 'woocommerce' ),
		'woocommerce_product_multiplier_field_html',
		'product',
		'normal',
		'high'
	);
}

function woocommerce_product_multiplier_field_html( $post ) {
	// 获取自定义字段值
	$multiplier = get_post_meta( $post->ID, '_multiplier', true );

	// 输出自定义字段
	echo '<input type="number" name="_multiplier" value="' . esc_attr( $multiplier ) . '" class="short" />';
}

add_action( 'admin_init ', 'woocommerce_add_product_multiplier_field' );


if ( ! did_action( 'admin_init' ) ) {
	echo '`admin_init()` 钩子没有被触发';
}
error_log('111hhh');