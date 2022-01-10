<?php include 'header1.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="uid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $uid = $_POST['uid'];

        $sql = "SELECT * FROM table_user WHERE uid = {$uid}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="update-user.php" method="post">
        <div class="form-group">
            <label for="">username</label>
            <input type="hidden" name="uid"  value="<?php echo $row['uid']; ?>" />
            <input type="text" name="username" value="<?php echo $row['username']; ?>" />
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text" name="password" value="<?php echo $row['password']; ?>" />
        </div>	
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
