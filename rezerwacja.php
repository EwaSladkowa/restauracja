<?php
    $serwer="localhost";
    $username="root";
    $password="";
    $database="bazaa"

    $connection =
        mysqli(hostname: $serwer, username: $username, password: $password = "",database: $database);

    if (!$connection ){
        die(mysqli_error(mysql: $connection));
    }
    foreach($_POST as $key => $value){
        echo $key, ":", $value;
    }
    $date = $_POST["data_rez"];
    $phone = $_POST["telefon"];
    $amountOfPeople = $_POST["ilosc_osob"];

    mysqli_query(
        $connection,
        query: "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) 
        VALUES ('$date','$amountOfPeople','$phone')" 
    )
    mysqli_close
    

?>
