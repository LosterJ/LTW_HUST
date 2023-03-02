<?php
include 'Product.php';
$product = new Product();

if(!empty($_POST['action']) && $_POST['action'] == 'AddToCartForm'
	&& !empty($_POST['item_id'])) {
		$itemId = $_POST['item_id'];
		$product->addToCart($itemId);
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}

if(!empty($_POST['action']) && $_POST['action'] == 'DeleteCartForm'
	&& !empty($_POST['cart_id'])) {
		$cartId = $_POST['cart_id'];
		$product->DeleteCart($cartId);
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
?>