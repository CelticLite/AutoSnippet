<?php
require('../databaseConnect.php');
require('../regpagemodel/regpagemodel.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'reg_user';
    }
}

echo $action;

if ($action == reg_user) {
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
                 $address == NULL || $city == NULL || $state == NULL || $zip == NULL || $country == NULL || 
                     $phone == NULL || $email == NULL) {
        $error = "Invalid customer data. Check all fields and try again.";
//        <!-- make error page -->
        include('../errors/error.php');
    } else { 
        reg_user($teamname, $username, $password ,$first_name,$last_name,$address,$city,$state,
                     $zip,$country,$phone,$email);
        header("Location: .");
        //include('LoginPage.html');
        //will be redirected to login page
    }
        
}
?>