<?php


if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once "dbh.php";
    require_once "functions.php";


    loginUser($conn, $email, $pwd);


} else {
    header("location: ./login.php");
    exit();
}