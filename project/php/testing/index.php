<?php
require_once('./model/database.php');
require_once('./model/func_db.php');

$lifetime = 60 * 60 * 24 * 365; //1 year lifetime for cookie
session_set_cookie_params($lifetime, '/');
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'check_login';
    }
}

if($action == 'check_login'){

    if(isset($_SESSION['username'])){
    $email = $_SESSION['username'];

    $comments = get_comments();

    include('./view/userpage.php');
}

        else{include('./view/login.php');}
      
}

if ($action == 'show_login') {
    include('./view/login.php');
}

else if ($action == 'show_register_page') {
    include('./view/useradd.php');
}

else if ($action == 'show_userpage') {

	$comments = get_comments();
    include('./view/userpage.php');
}

else if ($action == 'login_user'){

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];    
        if($username != NULL && $password !=NULL){
        setcookie('username', $username);
    }
    
    $_SESSION['username'] = $username;
    }

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    $user1 = get_user($username);
    $pass1 = get_pass($password);


    if ($pass1 == NULL || $pass1 == FALSE ) {
        $error = "Incorrect password.";
        include('./errors/error.php');
    } else { 
        if($user1 == NULL  || $user1 == FALSE){
            $error = "Incorrect username.";
            include('./errors/error.php');
        } else {
            if ($user1 != NULL && $pass1 !=NULL) {
                include('./view/userpage.php');
            } else {
                $error = "Incorrect login.";
                include('./errors/error.php');
            }
        }
    }
}



else if ($action == 'add_user') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $country = filter_input(INPUT_POST, 'country');


    if ($username == NULL || $username == FALSE) {
        $error = "Invalid username data. Check all fields and try again.";
        include('./errors/error.php');
    } 
    else { 
        add_user($username, $password, $fname, $lname,  $email, $phone, $address, $city, $state, $zip, $country); 

        include('./view/login.php');
    
    }
}  


else if ($action == "add_comment"){
    //will need to add username

    $uid = filter_input(INPUT_POST, 'uid');
    $message = filter_input(INPUT_POST, 'message');
    $status = filter_input(INPUT_POST, 'status');


    add_comment($uid, $message, $status);
    $action == NULL;
    include('./view/userpage.php');

}


else if ($action == "delete_comment"){
	$cid = filter_input(INPUT_POST, 'cid');

    delete_comment($cid);


    include('./view/userpage.php');  

	
}

else if ($action =="edit_comment"){
        $cid = filter_input(INPUT_POST, 'cid');

        $comment = get_one_comment($cid);

        include('./view/editcommentV2.php');

}

else if ($action =="change_comment"){
    $cid = filter_input(INPUT_POST, 'cid');
    $message = filter_input(INPUT_POST, 'message');
    $status = filter_input(INPUT_POST, 'status');

    editComment($cid, $message, $status);


        include('./view/userpage.php'); 

}

else if ($action =="return_login"){
        include('./view/login.php');

}

else if ($action == "logout_user"){
    session_destroy();
    include('./view/login.php');
	
	}

else if ($action == "filter_all"){
    include('./view/userpage.php');

}

else if ($action == "filter_uncomplete"){
    //get_comments_by_status("Not Complete")
    include('./view/userpagefilteruncomplete.php');

}else if ($action == "filter_in_progress"){
    //get_comments_by_status("In Progress")
    include('./view/userpagefilterinprogress.php');

}else if ($action == "filter_done"){
    //get_comments_by_status("Done")
    include('./view/userpagefilterdone.php');
    
}
		
			


