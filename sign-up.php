<?php
    include "header0.php";
?>
<div id="main-content">
    <h2>Sign Up</h2>
    <form action="savedata-signup.php" method="post" class="post-form">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" name="submit" value="Sign Up" class="submit"> 
    </form>
</div>

</div>
</body>
</html>
