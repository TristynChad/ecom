<?php

require_once APP_DIR . "Utils/code.precheckout.php";


// if(isset($_POST["remove_from_cart"])){
//     echo "You clicked a button";
    
//     $cart_object->removeFromCart($_POST["cart_id"], $user_id);
//     $_SESSION["message"] = "Product removed from cart";
//     //header("location:" . BASE_URL . "cart");
//     //$user_object->login($_POST);
// }

$cart_details = $cart_object->getCartDetails($user_id);

$cart_object->calculateTotal();


//load views 
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";

if(empty($cart_details)){
    echo "Cart is empty";
}else{
    require_once APP_DIR . "Views/pages/checkout.php";
}

require_once APP_DIR . "Views/footer.php";