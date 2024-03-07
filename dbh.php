<?php

    $dbhostname = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'capstone';


$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    echo mysqli_connect_error();
} else {

};