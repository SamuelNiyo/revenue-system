<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "revenuesystem";

// Creating connection
$connection = new mysqli($host, $user, $pass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_GET["id"])) {
    $id = $connection->real_escape_string($_GET["id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM user WHERE id = $id";

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