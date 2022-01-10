<?php include 'header2.php';
session_start();
if(isset($_POST['okbtn'])){

    include "config.php";
    $uid = $_SESSION['uid'];

    $sql = "DELETE FROM table_user WHERE uid = {$uid}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);

} elseif(isset($_POST['cancelbtn'])) {
    header("Location: http://localhost/crud/index.php");
}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <!-- <input type="text" name="uid" value="<?php echo $_SESSION['uid']; ?>"/> -->
            <p><?php echo $_SESSION['uid']; ?></p>
        </div>
        <input class="submit" type="submit" name="okbtn" value="OK" />
        <input class="submit" type="submit" name="cancelbtn" value="CANCEL" />
    </form>
</div>
</div>
</body>
</html>