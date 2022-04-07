<?php
require('./model/database.php');
require('./model/func_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}

if ($action == 'show_login') {
    include('./view/login.php');
}

else if ($action == 'validate_login'){
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
            if (valid_login($username, $password)) {
                include('./view/commentbox.php');
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
       
    }else if($fname == NULL || $lname == NULL || $email == NULL || $password == NULL || $phone == NULL
            || $address == NULL || $city == NULL || $state == NULL || $zip == NULL || $teamname == NULL ){

            $error =  "Check all fields and try again.";
            include('.errors/error.php');
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
    $username = filter_input(INPUT_POST, 'username'); 
    if ($username == NULL || $username == FALSE) {
        $error = "Missing or incorrect username.";
        include('./errors/error.php');
    } else { 
     
        setcookie('username', $username,  0);
        include('userpage.php');
    }  
}  

else if ($action == "comment_list"){
    $comments = get_comments();
 
} else if ($action == "add_comment"){
    //will need to add username 
    $uid = filter_input(INPUT_POST, 'uid');
    $message = filter_input(INPUT_POST, 'message');

    add_comment($uid, $message);

    include('./view/userpage.php');
    
} else if($action == 'delete_comment'){
    
    $cid = filter_input(INPUT_POST, 'cid');
    delete_comment($cid);
    header("Location: .?cid=$cid");
    //include('./view/userpage.php');
    
}else if ($action == logout){
    session_destroy();
    include('./view/login.php');

}
?>
