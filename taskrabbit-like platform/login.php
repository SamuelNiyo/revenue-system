<?php
session_start();
//call the file that contain database connection
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            echo "Logged Successfully";
            header("location:home.php");
            exit();
        } else {
            echo "username or password are incorrect.";
        }
    } else {
        echo "User not found.";
    }
}
?>
