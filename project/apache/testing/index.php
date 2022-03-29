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

// if ($action == 'list_users') {
//     $category_id = filter_input(INPUT_GET, 'category_id', 
//             FILTER_VALIDATE_INT);
//     if ($category_id == NULL || $category_id == FALSE) {
//         $category_id = 1;
//     }
//     $category_name = get_category_name($category_id);
//     $categories = get_categories();
//     $products = get_products_by_category($category_id);
//     include('./view/product_list.php');

if ($action == 'delete_user') {
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

else if ($action == 'show_add_form') {
    include('.view/useradd.php');    
} 

else if ($action == 'add_user') {
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $team = filter_input(INPUT_POST, 'country');
    if ($username == NULL || $username == FALSE) {
        $error = "Invalid username data. Check all fields and try again.";
        include('error.php');
    } else { 
        add_user($username, $fname, $lname, $email, $password, $phone, $address, $city, $state, $zip, $country);
        $action = NULL; 
        header("Location: .");
    }
}  

else if ($action == 'show_login') {
    include('./view/login.php');
}  

else if ($action == 'validate_login'){
    $username = filter_input(INPUT_POST, 'id')
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
                include('landing.php');
            } else {
                $error = "Incorrect login.";
                include('./errors/error.php');
            }
        }
    } 
}  

else if ($action == 'show_home'){
    $username = filter_input(INPUT_POST, 'username'); 
    if ($username == NULL || $username == FALSE) {
        $error = "Missing or incorrect username.";
        include('./errors/error.php');
    } else { 
        include('landing.php');
    }  
}  

else if ($action == "comment_list"){
    $comments = get_comments();
 
} else if ($action == "add_comment"){
    //will need to add username 
    $uid = filter_input(INPUT_POST, 'uid');
    $message = filter_input(INPUT_POST, 'message');

    add_comment($uid, $message);

    include('./view/commentbox.php');

}
?>
