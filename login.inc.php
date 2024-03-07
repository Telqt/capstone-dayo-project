<?php

require_once "dbh.php";

if(isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    function emailExists($conn, $email, $pwd) {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_assoc($result);
        return $result->num_rows > 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (emailExists($conn, $email, $pwd)) {
            
            $sql = "SELECT * FROM users WHERE email = ? AND password = ?;";
            

        } else {
            echo "
            <script>alert('Email or Account does not Exist!'); window.location.href = 'Login.php';</script>
            ";
        }
    }


} else {
    header("Location: ./login.php");
    exit();
}