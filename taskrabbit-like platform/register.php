<?php
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $position=$_POST['position'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql="INSERT INTO user(name,position,gender,dob,phone,email,username,password) VALUES('$name','$position','$gender','$dob','$phone','$email','$username','$password')";
    $result=$connection->query($sql);
    if (!$result) {
        echo "Error: ".$sql."<br>" .$connection->error;
    }
    else{
        echo "Data Inserted Successfully";
        header("location:login.html");
        exit();
    }
    
}

?>