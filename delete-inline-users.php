<?php
include 'config.php';
$uid = $_GET['id'];

$sql0 = "SELECT * FROM table_user WHERE sid = {$uid}";
$result0 = mysqli_query($conn, $sql0) or die("Query Unsuccessful.");
$row0 = mysqli_fetch_assoc($result0);
$username = $row0["username"];
$password = $row0["password"];

$sql1 = "DELETE FROM student WHERE `susername`='$username' AND `spassword`='$password'";
$result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

$sql = "DELETE FROM table_user WHERE uid = {$uid}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/users.php");

mysqli_close($conn);

?>
