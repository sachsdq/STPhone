<?php
include_once("connect.php");
$conn = db_connect();


$id = (int) $_GET['id'];
$sql = "DELETE FROM book where id = $id ";
mysqli_query($conn, $sql);
header("location:Trangchu.php");

?>