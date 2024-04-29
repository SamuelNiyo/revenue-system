<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "revenuemanagementsystem";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
$conn->select_db($dbname);

// Prepare SQL statement with placeholders to prevent SQL injection
$sql = "INSERT INTO message (Names, Email, Message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters to the prepared statement
$stmt->bind_param("sss", $names, $email, $message);

// Set parameters from POST data
$names = $_POST['Names'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Data inserted successfully<br>";
    header("Location: index.php"); // Redirect to index.php after successful insertion
    exit(); // Stop further execution
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
