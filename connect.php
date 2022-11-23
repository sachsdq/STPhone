<?php
function db_connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "stphonedb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_errno) {
        echo $conn->connect_error;
        exit();
    }
    return $conn;
}
?>