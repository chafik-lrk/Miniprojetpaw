<?php

$username = $_POST['username'];
$password = $_POST['password'];
 
include "config.php";

$sql = "INSERT INTO table_user(`username`, `password`) VALUES ('{$username}','{$password}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/forUsers.php");

mysqli_close($conn);

?>
