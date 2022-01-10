<?php
    include "header1.php";
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form action="add-user.php" method="post" class="post-form">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit" name="submit" value="save" class="submit"> 
    </form>
</div>

</div>
</body>
</html>
