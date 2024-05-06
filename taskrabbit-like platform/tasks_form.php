<?php
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id=$_POST['user_id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_type=$_POST['user_type'];
    $registration_date=$_POST['registration_date'];

    $sql="INSERT INTO users (user_id,username,email,password,user_type,registration_date) VALUES('$user_id','$username','$email','$password','$user_type','$registration_date')";
    $result=$connection->query($sql);
    if (!$result) {
        echo "Error: ".$sql."<br>" .$connection->error;
    }
    else{
        echo "Data Inserted Successfully";
        header("location:users_table.php");
        exit();
    }
    
}

?>