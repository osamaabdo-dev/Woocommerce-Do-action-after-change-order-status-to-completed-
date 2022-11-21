<?php

function os_after_order_completed( $order_id ) {

	$order = wc_get_order($order_id);
	$customer_id = $order->get_user_id();
	$order_products = $order->get_items();

	foreach ( $order_products as $item_id => $item ) { // if you need to access to order products
		$product_id = $item->get_product_id();
        // do something
	}

	// do something

}
add_action( 'woocommerce_order_status_completed', 'os_after_order_completed', 10, 1 );
