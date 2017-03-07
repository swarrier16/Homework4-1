<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ssw7';
    $username = 'ssw7';
    $password = 'SUbO2ykc4';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
