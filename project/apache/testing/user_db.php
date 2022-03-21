<?php

function get_user($username) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->execute();
    $user1 = $statement->fetch();
    $statement->closeCursor();
    return $user1;
}

function delete_user($username) {
    global $db;
    $query = 'DELETE FROM users
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}

function add_user($username, $fname, $lname, $email, $password, $phone, $address, $city, $state, $zip, $country) {
    global $db;
    $query = 'INSERT INTO users
                 (username, password, first_name, last_name, address, city, state, zip, country, phone, email)
              VALUES
                 (:username, :password, :fname, :lname, :address, :city, :state, :zip, :country, :phone, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':country', $country);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}
?>