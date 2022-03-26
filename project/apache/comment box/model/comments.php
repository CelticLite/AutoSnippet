<?php

// will need to insert comment based on username
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

