<?php
    $dsn = 'mysql:host=localhost;dbname=commentsection';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../commentBox/db_error.php');
        exit();
    }
?>