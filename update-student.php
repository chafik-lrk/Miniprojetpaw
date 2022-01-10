<?php
    include 'header2.php';
    session_start();
?>
    <div id="main-content">
        <h2>Edit Record</h2>
        <form class="post-form" action="update-user.php" method="post">
            <div class="form-group">
                <label for="">username</label>
                <input type="hidden" name="uid"  value="<?php echo $_SESSION['uid']; ?>" />
                <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" />
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>" />
            </div>	
            <input class="submit" type="submit" value="Update"  />
        </form>
    </div>
</div>
</body>
</html>
