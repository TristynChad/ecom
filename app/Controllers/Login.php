<?php


//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";


//create objects
$db_object = new Database();
$user_object = new User($db_object);



if(isset($_POST["login"])){
    echo "You clicked a button";

    if($user_object->login($_POST)){
        $_SESSION["message"] = "Login was succesful";
        header("location: store");
        exit;
    }else{
        $_SESSION["message"] = "Invalid Credentials";
    }
 
}

//load views 
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/login1.php";
require_once APP_DIR . "Views/footer.php";
