<?php
$dsn = 'mysql:host=localhost:3306;dbname=mediforce';
$username = 'root';
$password = '';

try { 
    $db = new PDO($dsn, $username, $password); 
    
} 
catch (PDOException $e) 
{ 
    $error_message = $e->getMessage(); 
    header('Location: index.php?action=error&message=$error_message');  
}




