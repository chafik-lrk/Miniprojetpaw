<?php include 'header1.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $uid = $_GET['id'];

    $sql = "SELECT * FROM table_user WHERE uid = {$uid}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="update-user.php" method="post">
      <div class="form-group">
          <label>username</label>
          <input type="hidden" name="uid" value="<?php echo $row['uid']; ?>"/>
          <input type="text" name="username" value="<?php echo $row['username']; ?>"/>
      </div>
      <div class="form-group">
          <label>password</label>
          <input type="text" name="password" value="<?php echo $row['password']; ?>"/>
      </div>
      	  
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
