<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "revenuemanagementsystem";

// Creating connection
$connection = new mysqli($host, $user, $pass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_GET["uid"])) {
    $uid = $connection->real_escape_string($_GET["uid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM user WHERE uid = $uid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: user_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>