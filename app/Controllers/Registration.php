<?php

//required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";


//create objects
$db_object = new Database();
$user_object = new User($db_object);

if(isset($_POST["registration"])){

    // echo "you clicked";
    // $doesEmailExist = $user_object->doesEmailExist($_POST["email"]);
    // echo "exist? -" . $doesEmailExist . '-';
    // exit;

    if($user_object->doesEmailExist($_POST["email"])){
        $_SESSION["message"] = "Email already exists";
    }else{
        $user_object ->register($_POST);
        $_SESSION["message"] = "Registration was successful";

    }


}


//load views 
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/registration1.php";
require_once APP_DIR . "Views/footer.php";