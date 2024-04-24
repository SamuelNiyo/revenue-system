<?php
include "dbconnection.php";
if (isset($_GET["rid"])) {
    $rid = $connection->real_escape_string($_GET["rid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM revenue WHERE rid = $rid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: revenue_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>