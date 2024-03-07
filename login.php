<?php
    include_once "header.php";
?>

<div class="signup-container">
    <form action="login.inc.php" method="post">
        <h4>Login</h4>
        <div class="input-field">
            <input class="email" type="email" name="email" required autocomplete="off">
            <label for="fname">Email</label>
        </div>
        <div class="input-field">
            <input class="pwd" type="password" name="pwd" required autocomplete="off">
            <label for="pwd">Password</label>
        </div>
        <input class="submitbtn" type="submit" name="submit"></input>
    </form>
</div>

<?php
    include_once "footer.php";
?>