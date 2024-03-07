<?php
include_once "./dbh.php";

$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('Test', 'User', 'test@example.com', 'hashed_password')"; // Replace 'hashed_password' with actual hashed password

$data = mysqli_query($conn, $sql);

if (!$data) {
    echo "Error inserting data: " . mysqli_error($conn);
} else {
    echo "Data inserted successfully!";
}

mysqli_close($conn);
?>
