<?php

function reg_user($teamname,$username,$password,$first_name,$last_name,$address,$city,
                     $state,$zip,$country,$phone,$email){
    global $db;
    $query = 'INSERT INTO users SET
            teamname = :teamname,
            username = :username,
            password = :password
            firstName = :first_name,
            lastName = :last_name,
            address = :address,
            city = :city,
            state = :state,
            zip = :zip,
            country = :country,
            phone = :phone,
            email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':teamname', $teamname);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':country', $country);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}
?>
