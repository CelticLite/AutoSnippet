<?php
require('../databaseConnect.php');
require('../regpagemodel/regpagemodel.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL){
$action = 'reset';
}else{
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'reg_user';
    }
}

switch($action){
    
case 'reset':
    
        $teamname = '';
        $username = '';
        $password = '';
        $first_name = '';
        $last_name = '';
        $address = '';
        $city = '';
        $state = '';
        $zip = '';
        $country = '';
        $phone = '';
        $email = '';
        include('RegisterUserView.html');
        break;
    
case 'reg_user':
    
        $teamname = filter_input(INPUT_POST, 'teamname');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUTPOST, 'password');
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $country = filter_input(INPUT_POST, 'country');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        
         if ($teamname == NULL || $username == NULL || $password == NULL || $first_name == NULL || $last_name == NULL || 
                 $address == NULL || $city == NULL || $state == NULL || $postal == NULL || $country == NULL || 
                     $phone == NULL || $email == NULL) {
        $error = "Invalid customer data. Check all fields and try again.";
//        <!-- make error page -->
        include('../errors/error.php');
        break;
    } else { 
        reg_user($teamname, $username, $password ,$first_name,$last_name,$address,$city,$state,
                     $zip,$country,$phone,$email);
        //header("Location: .");
        include('RegisterUserView.html');
        break;
        //will be redirected to login page
    }
        
}
?>
