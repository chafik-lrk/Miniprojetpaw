<?php
    include 'header.php';
    if(isset($_POST['okbtn'])){

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
        
    } elseif(isset($_POST['cancelbtn'])) {
        header("Location: http://localhost/crud/adminInterface.php");
    }
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="okbtn" value="OK"/>
        <input class="submit" type="submit" name="cancelbtn" value="CANCEL"/>
    </form>
</div>
</div>
</body>
</html>