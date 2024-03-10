<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/bg.css">
    <link rel="stylesheet" href="./style/featured.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/signup.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/shop.css">
    <link rel="shortcut icon" href="./img/android-chrome-512x512.png" type="image/x-icon">
    <title>DAYO | Tactical Gear</title>
</head>
<body>
    
<section id="header" class="scrolled">
    <nav>
        <ul>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="logo" onclick="window.location.href = 'index.php'">
        <h1>DAYO |</h1>
        <span class="sub">Tactical <br>Gear</span>
    </div>


    <div class="logsign">

        <?php
            if(isset($_SESSION["UID"])) {

                if($_SESSION["UID"] === 11 AND $_SESSION["email"] === "admin.dayo@gmail.com") {
                    echo '<a href="prodman.php"><div class="login-btn">Product Manager</div></a>';
                    echo '<a href="logout.php"><div class="signup-btn">Logout</div></a>';
                } else {
                    echo '<a href="profile.php"><div class="login-btn">' . $_SESSION["firstname"] . '</div></a>';
                    echo '<a href="logout.php"><div class="signup-btn">Logout</div></a>';
                    echo '<svg id="cart" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>';
                }              
            } else {
                echo '<a href="login.php"><div class="login-btn">Login</div></a>';
                echo '<a href="signup.php"><div class="signup-btn">Signup</div></a>';
            }

        ?>
    </div>

    
    
</section>