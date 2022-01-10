<?php
    include 'header.php';
    if(isset($_POST['deletebtn'])){

        include "config.php";
        $stu_id = $_POST['sid'];
        
        $sql0 = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result0 = mysqli_query($conn, $sql0) or die("Query Unsuccessful.");
        $row0 = mysqli_fetch_assoc($result0);

        $username = $row0["susername"];
        $password = $row0["spassword"];
        
        $sql1 = "DELETE FROM table_user WHERE `username`='$username' AND `password`='$password'";
        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
        
        $sql = "DELETE FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
        header("Location: http://localhost/crud/adminInterface.php");
        
        mysqli_close($conn);
        
    } elseif(isset($_POST['cancelbtn'])){
        header("Location: http://localhost/crud/adminInterface.php");
    }
?>