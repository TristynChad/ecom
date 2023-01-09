<?php

//required files
require_once APP_DIR . "Utils/code.precheckout.php";
$completed = false;

//get cart details
$cart_details = $cart_object->getCartDetails($user_id);

//check if cart is empty
if(empty($cart_details)){
    echo "Cart is empty";
    exit;
}

//calculate total
$cart_object->calculateTotal();

//determine which payment was used 
switch ($payment) {
    case 'debug':
        $data = [
        "payment" => "none",
        "payment_id" => "none",
        "subtotal" => $cart_object->getSubtotal(),
        "total" => $cart_object->getTotal(),
        "total_discount_amount" => 0
        ];
        
        $completed = true;
        break; 
    
    default:
        # code...
        break;
}

//check if payment was completed
if(!$completed || empty($data)){
    echo "Payment process was not completed";
    exit;
}

$data["user_id"] = $user_id;

//insert order
$order_id = $order_object->insertOrder($data);


//insert order details
$order_object->insertOrderDetails($cart_details, $user_id);
