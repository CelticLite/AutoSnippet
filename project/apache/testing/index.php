<?php
require('./model/database.php');
require('./model/func_db.php');

//$lifetime = 60 * 60 * 24 * 365; //1 year lifetime for cookie
//session_set_cookie_params($lifetime, '/');
//session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
    
    
    //else if (isSet($_SESSION['username'])) {
    //$action = 'validate_login';
    //}
}

if ($action == 'show_login') {
    include('./view/login.php');
}

else if ($action == 'validate_login'){

    
//    if(!isSet($_SESSION['username'])) {
//            $_SESSION['username'] = $_POST['username'];
//        } 
//    else if(!isSet($_SESSION['password'])) {
//        $_SESSION['password'] = $_POST['password'] 
//        }
    
    
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if ($password == NULL || $password == FALSE ) {
        $error = "Missing password.";
        include('./errors/error.php');
    } else { 
        if($username == NULL || $username == FALSE){
            $error = "Missing username.";
            include('./errors/error.php');
        } else {
            
            
            //if (valid_login($_SESSION['username'], $_SESSION['password'])) {
            
            
            if (valid_login($username, $password)) {
                include('./view/userpageV4.php');  //comment_box to userpageV4
            } else {
                $error = "Incorrect login.";
                include('./errors/error.php');
            }
        }
    } 
}  

else if ($action == 'show_register_page'){
        include './view/useradd.php';
    }

else if ($action == 'add_user') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $country = filter_input(INPUT_POST, 'country');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email', 
        FILTER_VALIDATE_EMAIL);
    $teamname = filter_input(INPUT_POST, 'teamname');


    if ($username == NULL || $username == FALSE) {
        $error = "Invalid username data. Check all fields and try again.";
        include('./errors/error.php');
    } 
    else { 
        add_user($username, $password, $first_name, $last_name,  $address, $city, $state, $zip, $country, $phone, $email, $teamname);
        $action = NULL; 
        include('./view/login.php');
    }
}  


else if ($action == 'delete_user') {
    $username = filter_input(INPUT_POST, 'username');
    if ($username == NULL || $username == FALSE) {
        $error = "Missing or incorrect username.";
        include('error.php');
    } else { 
        delete_user($username);
        $action = NULL; 
        header("Location: .");
    }
} 


else if ($action == 'show_home'){
    
//    if(!isSet($_SESSION['username'])) {
//            $_SESSION['username'] = $_POST['username'];
//        } 
    
    $username = filter_input(INPUT_POST, 'username'); 
    if ($username == NULL || $username == FALSE) {
        $error = "Missing or incorrect username.";
        include('./errors/error.php');
    } else { 
        include('landing.php');  //WE DON"T HAVE THIS PAGE? WHAT IS THIS SUPPOSED TO BE?
    }  
}  

else if ($action == "comment_list"){
    $comments = get_comments();
 
} else if ($action == "add_comment"){

    
//    if(!isSet($_SESSION['username'])) {
//            $_SESSION['username'] = $_POST['username'];
//        } 
    
    
    //will need to add username 
    
    //$uid = $SESSION['username'];
    $uid = filter_input(INPUT_POST, 'uid');
    $message = filter_input(INPUT_POST, 'message');

   //add_comment($_SESSION['username'], $message);
    
    add_comment($uid, $message);

    include('./view/userpageV4.php');  //userpage to userpageV4
    
    }else if($action == 'delete_comment'){
    
    $cid = filter_input(INPUT_POST, 'cid');
    delete_comment($cid);
    include('userpageV4.php');

}

}
?>
