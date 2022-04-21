<?php
// Set up the database connection
$dsn = 'pgsql:host=database;dbname=testdb';
$username = 'testuser';
$password = 'Infected42!';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>