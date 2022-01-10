<?php 
    if(isset($_POST['submit'])){ 
        include "config.php";  
        $usr = $_POST['username']; 
        $pas = $_POST['password']; 
        $sql = "SELECT * FROM table_user WHERE username='$usr' AND password='$pas' LIMIT 1"; 
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) == 1){ 
            $row = mysqli_fetch_array($result);
            session_start(); 
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['username'] = $row['username']; 
            $_SESSION['password'] = $row['password']; 
            $_SESSION['logged'] = TRUE;
            if($row['username'] == 'admin' && $row['password'] == 'admin') { 
                header("Location: forAdmin.php");
                exit;
            } else {
                header("Location: forUsers.php"); 
                exit;
            }
        }
    } 
?> 