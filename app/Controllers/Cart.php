<?php


//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/Cart.php";
require_once APP_DIR . "Utils/code.isLoggedIn.php";


//create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);
$cart_object = new Cart($db_object);

if(isset($_POST["add_to_cart"])){
    echo "You clicked a button";
    
    $cart_object->addToCart($user_id, $id, $_POST["cart_quantity"]);
    $_SESSION["message"] = "Product successfully added to cart";
    //header("location:" . BASE_URL . "cart");
    //$user_object->login($_POST);
}

$cart_details = $cart_object->getCartDetails($user_id);



foreach ($product_details as $data) {
    # code...
}

//load views 
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/cart.php";
require_once APP_DIR . "Views/footer.php";