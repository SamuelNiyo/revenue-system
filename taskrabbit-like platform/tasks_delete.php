<?php
if (isset($_GET["task_id"])) {
   $task_id=$_GET["task_id"];
   //call file that contain database connection
include "dbconnection.php";
$sql="DELETE FROM tasks WHERE task_id=$task_id";
if ($connection->query($sql)) {
    echo "Record deleted successfully";
    header("location:tasks_table.php");
    exit;
}else{
    echo "Error deleting record: " . $connection->error;
}
$connection->close();
}

?>