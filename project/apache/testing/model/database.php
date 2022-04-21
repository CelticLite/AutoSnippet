<?php
    $dsn = 'pgsql:host=localhost;dbname=testdb';
    $username = 'testuser';
    $password = 'Infected42!';
  
    
    
                
    

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
               
