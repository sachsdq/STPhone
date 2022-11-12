<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vidu";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    echo"Connected Fail";
    }
    // echo "Connected successfully";
?>

