<?php
include "dbconnection.php";

if (isset($_GET["uid"])) {
    // Sanitize input
    $uid = $connection->real_escape_string($_GET["uid"]);

    // Prepare JavaScript confirmation function
    echo " <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>";

    // Prepare DELETE statement
    $sql = "DELETE FROM user WHERE uid = $uid";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo <form method="post" onsubmit="return confirmDelete();">;
        header("Location: user_table.php"); // Redirect after successful deletion
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}

$connection->close(); // Close database connection
?>
