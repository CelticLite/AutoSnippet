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

function get_pass($password) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $pass1 = $statement->fetch();
    $statement->closeCursor();
    return $pass1;
}




function add_user($username, $password, $fname, $lname,  $email, $phone, $address, $city, $state, $zip, $country) {
    global $db;
 
    $query = 'INSERT INTO users (`username`, `password`, `fname`, `lname`, `email`, `phone`, `address`, `city`, `state`, `zip`, `country`)
              VALUES
                 (:username, :password, :fname, :lname, :email, :phone, :address, :city, :state, :zip, :country)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':country', $country);
    $statement->execute();
    $statement->closeCursor();
}

function add_comment($uid, $message, $status) {
    global $db;
    $query = 'INSERT INTO comments (uid, message, status)
              VALUES (:uid, :message, :status)';
    $statement = $db->prepare($query);
    $statement->bindValue(':uid', $uid);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':status', $status);
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

function get_cid(){
   global $db;
   $query = 'SELECT cid FROM comments
   WHERE cid = :cid';
    $statement3 = $db->prepare($query);
    $statement3->execute();
    $comments = $statement3->fetchAll();
    $statement3->closeCursor();
    return $comments;

}

function delete_comment($cid) {
    global $db;
    $query = 'DELETE FROM comments
              WHERE cid = :cid';
    $statement = $db->prepare($query);
    $statement->bindValue(':cid', $cid);
    $statement->execute();
    $statement->closeCursor();
}

function get_one_comment($cid){
   global $db;
   $query = 'SELECT message FROM comments
   WHERE cid = :cid';
    $statement = $db->prepare($query);
    $statement->bindValue(':cid', $cid);
    $statement->execute();
    $comment1 = $statement->fetchAll();
    $statement->closeCursor();
    return $comment1;
}
//function editComment($cid, $message){
  //  global $db;
    //$query = 'UPDATE comments SET message = :message
      //        WHERE cid = :cid';
    //$statement = $db->prepare($query);
    //$statement->bindValue(':cid', $cid);
    //$statement->bindValue(':message', $message);
    
    //$statement->execute();
    //$statement->closeCursor();


//}

function editComment($cid, $message, $status){
    global $db;
    $query = 'UPDATE comments SET message = :message AND status = :status
              WHERE cid = :cid';
    $statement = $db->prepare($query);
    $statement->bindValue(':cid', $cid);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':status', $status);

    $statement->execute();
    $statement->closeCursor();

}


function get_comments_by_status($status){
    global $db;
    $query = 'SELECT * FROM comments WHERE status = :status
   ORDER BY cid';
    $statement3 = $db->prepare($query);
    $statement->bindValue(':status', $status);
    $statement3->execute();
    $commentByStatus = $statement3->fetchAll();
    $statement3->closeCursor();
    return $commentsByStatus;

}


function get_completed_comments(){
    global $db;
    $query = 'SELECT * FROM comments WHERE status = "Completed"
   ORDER BY cid';
    $statement3 = $db->prepare($query);
    $statement3->execute();
    $comments = $statement3->fetchAll();
    $statement3->closeCursor();
    return $comments;

}

function get_notcomplete_comments(){
    global $db;
    $query = 'SELECT * FROM comments WHERE status = "Not Completed"
   ORDER BY cid';
    $statement3 = $db->prepare($query);
    $statement3->execute();
    $comments = $statement3->fetchAll();
    $statement3->closeCursor();
    return $comments;

}

function get_inprogress_comments(){
    global $db;
    $query = 'SELECT * FROM comments WHERE status = "In Progess"
   ORDER BY cid';
    $statement3 = $db->prepare($query);
    $statement3->execute();
    $comments = $statement3->fetchAll();
    $statement3->closeCursor();
    return $comments;

}



?>
