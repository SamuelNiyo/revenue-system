<?php
include "dbconnection.php";

if (isset($_GET["uid"])) {
    $uid = $connection->real_escape_string($_GET["uid"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM user WHERE uid = $uid";

    // JavaScript for confirmation
    echo '<script>
        function confirmDelete() {
            var confirmMsg = confirm("Are you sure you want to delete this record?");
            if (confirmMsg) {
                window.location.href = "deleteuser.php?uid=' . $uid . '"; // Change the URL to your delete script
            }
        }
        </script>';

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
        echo '<script>confirmDelete();</script>'; // Call the confirmation function
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>
