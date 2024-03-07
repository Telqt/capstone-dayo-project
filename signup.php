<?php 

include_once "header.php";

?>



<div class="signup-container">
    <form action="signup.inc.php" method="post">
        <h4>Sign up</h4>
        <div class="input-field">
            <input class="fname" type="text" name="fname" required autocomplete="off">
            <label for="fname">First Name</label>
        </div>
        <div class="input-field">
            <input class="lname" type="text" name="lname" required autocomplete="off">
            <label for="lname">Last Name</label>
        </div>
        <div class="input-field">
            <input class="email" type="email" name="email" required autocomplete="off">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field">
            <input class="pwd" type="password" name="pwd" required autocomplete="off">
            <label for="pwd">Password</label>
        </div>
        <div class="input-field">
            <input class="rpwd" type="password" name="rpwd" required autocomplete="off">
            <label for="rpwd">Repeat Password</label>
        </div>
        
        <input class="submitbtn" type="submit" name="submit"></input>
    </form>
</div>



<?php 

include_once "footer.php";

?>