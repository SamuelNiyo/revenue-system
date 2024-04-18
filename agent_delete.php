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

if (isset($_GET["agid"])) {
    $agid = $connection->real_escape_string($_GET["agid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM agent WHERE agid = $agid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: agent_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>