<?php
// Include the file containing the database connection
include "dbconnection.php";

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $serviceprovider_id = $_POST['serviceprovider_id'];
    $user_id = $_POST['user_id'];
    $role_id = $_POST['role_id'];
    $description = $_POST['description'],
    $hourly_rate = $_POST['hourly_rate'];
    $rating = $_POST['rating'];

    // Prepare SQL query to insert data into the users table
    $sql = "INSERT INTO service_providers (serviceprovider_id, user_id, role_id, description, hourly_rate, rating) 
            VALUES ('$serviceprovider_id', '$user_id', '$role_id', '$description', '$hourly_rate', '$rating')";
    
    // Execute the SQL query
    $result = $connection->query($sql);

    // Check if the query was successful
    if (!$result) {
        // If there's an error, display it
        echo "Error: " . $sql . "<br>" . $connection->error;
    } else {
        // If data was inserted successfully, redirect to users_table.php
        echo "Data Inserted Successfully";
        header("location: serviceprovider_table.php");
        exit();
    }
}
?>
