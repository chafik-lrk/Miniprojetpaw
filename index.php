<?php
    include "header0.php";
?>
<div id="main-content">
    <h2>Login</h2>
    <form action="verify.php" method="post" class="post-form">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" name="submit" value="Login" class="submit"> 
    </form>
    <div class="post-form">
        <div class="form-group">
            <div style="text-decoration: none; font-weight: bold;">Vous n'etes pas un utilisateur?</div>
            <br>
            <a href="sign-up.php" class="submit" style="text-decoration: none">incrivez-vous</a>
        </div>
    </div>
</div>

</div>
</body>
</html>
