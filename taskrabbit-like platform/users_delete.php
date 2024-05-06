<?php
if (isset($_GET["user_id"])) {
   $user_id=$_GET["user_id"];
   //call file that contain database connection
include "dbconnection.php";
$sql="DELETE FROM users WHERE user_id=$user_id";
if ($connection->query($sql)) {
    echo "Record deleted successfully";
    header("location:users_table.php");
    exit;
}else{
    echo "Error deleting record: " . $connection->error;
}
$connection->close();
}

?>