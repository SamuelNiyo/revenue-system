<?php
include "dbconnection.php";

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