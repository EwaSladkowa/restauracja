<?php
    $serwer="localhost";
    $username="root";
    $password="";
    $database="bazaa";

    $connection = mysqli_connect(hostname: $serwer, username: $username, password: $password = "",database: $database);

    if (!$connection ){
        die(mysqli_error(mysql: $connection));
    }
    
    $date = $_POST["data_rez"];
    $amountOfPeople = $_POST["liczba_osob"];
    $phone = $_POST["telefon"];

    mysqli_query(
        $connection,
        query: "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) 
        VALUES ('$date','$amountOfPeople','$phone')" 
    );
    mysqli_close(mysql: $connection);

    echo "Dodano rezerwację do bazy";

?>
