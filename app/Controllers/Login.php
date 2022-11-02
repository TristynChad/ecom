<?php


//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";


//create objects
$db_object = new Database();
$user_object = new User($db_object);



if(isset($_POST["login"])){
    echo "You clicked a button";
    $user_object->login($_POST);
}


//load views 
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/login.php";
require_once APP_DIR . "Views/footer.php";
