<?php
include "dbconnection.php";

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