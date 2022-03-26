<?php
//Connect to model
    include '../model/database.php';
    include '../model/comments.php';


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
    $action = 'comment_list';
    }

}

if ($action == "comment_list"){
    $comments = get_comments();
 
}


else if ($action == "add_comment"){
	//will need to add username 
	$uid = filter_input(INPUT_POST, 'uid');
	$message = filter_input(INPUT_POST, 'message');

    add_comment($uid, $message);

    include('../commentBox/commentbox.php');

}

?>