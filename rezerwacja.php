<?php
    $serwer="localhost";
    $username="root";
    $password="";
    $database="bazaa"

    $connection= new mysqli(hostname: $serwer, username: $username, password: $password = "",database: $database);

    if ($connection -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"
?>
