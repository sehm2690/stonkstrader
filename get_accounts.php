<?php

    header("Content-Type: text/plain");

    //get information
    $suName = $_POST["uName"];
    $sPassword = $_POST["pw"];
    //$sPassword_confirm = $_POST["signup-reenter-password"];
    
    //create the SQL query string
    $sql = "Insert into users(Username,Password) values ('$suName', '$sPassword');";


    //database information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stonkstrade";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
  
    $result = $conn->query($sql);
    if ($result === TRUE) {
        $last_id = $conn->insert_id;
        echo "Insert successfully. Last inserted ID is: " . $last_id;
    } else {
    echo "Error creating database: " . $conn->error;
    }
    $conn->close();
?>