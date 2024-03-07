<?php

function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        mysqli_stmt_close($stmt);
        $result = false;
        return $result;
    }
}

function loginUser($conn, $email, $pwd) {
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        echo "
            <script>alert('Email or Account does not Exist!'); window.location.href = 'Login.php';</script>
            ";
        exit();
    }

    $pwdHashed = $emailExists["password"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if($checkpwd === false) {
        echo "<script>alert('Incorrect Password!'); window.location.href = 'Login.php';</script>";
    }
    else if($checkpwd === true) {
        session_start();

        $_SESSION["UID"] = $emailExists["UID"];
        $_SESSION["firstname"] = $emailExists["firstname"];
        $_SESSION["lastname"] = $emailExists["lastname"];
        $_SESSION["email"] = $emailExists["email"];
        $_SESSION["ppicture"] = $emailExists["ppicture"];

        echo "<script>alert('Welcome " . $_SESSION['firstname'] . ", You are Logged in!'); window.location.href = 'shop.php';</script>";

        exit();
    }

}