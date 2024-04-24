<?php
include "dbconnection.php";
if (isset($_GET["tid"])) {
    $tid = $connection->real_escape_string($_GET["tid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM transaction WHERE tid = $tid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: transaction_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>