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
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO users
                 (username, password, first_name, last_name, address, city, state, zip, country, phone, email)
              VALUES
                 (:username, :password, :fname, :lname, :address, :city, :state, :zip, :country, :phone, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $hash);
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

function valid_login($username, $password) {
    global $db; 
    $query = 'SELECT password FROM users 
            WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    $hash = $row['password'];
    return password_verify($password, $hash);
}

function add_comment($uid,  $message) {
    global $db;
    $query = 'INSERT INTO comments (uid, message)
              VALUES (:uid, :message)';
    $statement = $db->prepare($query);
    $statement->bindValue(':uid', $uid);
    $statement->bindValue(':message', $message);
    $statement->execute();
    $statement->closeCursor();
}

function get_comments(){
    global $db;
    $queryComments = 'SELECT * FROM comments
    ORDER BY cid';
    $statement3 = $db->prepare($queryComments);
    $statement3->execute();
    $comments = $statement3->fetchAll();
    $statement3->closeCursor();
    return $comments;

}
?>
