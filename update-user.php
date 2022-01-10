<?php
session_start();
$uid = $_SESSION['uid'];
$susername = $_SESSION['username'];
$spassword = $_SESSION['password'];
$username = $_POST['username'];
$password = $_POST['password'];
 
include 'config.php';

$sql0 = "SELECT * FROM `student` WHERE susername='{$susername}' AND spassword='{$spassword}'";
$result0 = mysqli_query($conn, $sql0) or die("Query Unsuccessful.");
$row0 = mysqli_fetch_assoc($result0);

$sid = $row0["sid"];

$sql1 = "UPDATE `student` SET `susername`='{$username}', `spassword`='{$password}' WHERE sid='{$sid}'";
$result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

$sql = "UPDATE `table_user` SET `username`='{$username}', `password`='{$password}' WHERE uid='{$uid}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/forUsers.php");

mysqli_close($conn);

?>
