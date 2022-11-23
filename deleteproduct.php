<?php
include_once("connect.php");
$conn = db_connect();


$id = (int) $_GET['id'];
$sql = "DELETE FROM sanpham where masanpham = $id ";
mysqli_query($conn, $sql);
header("location:home.php");

?>