<?php
include "dbconnection.php"
if (isset($_GET["mid"])) {
    $mid = $connection->real_escape_string($_GET["mid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM manager WHERE mid = $mid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: manager_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>