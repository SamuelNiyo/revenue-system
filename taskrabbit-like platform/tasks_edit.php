<?php
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["task_id"])) {
        header("location: /taskrabbit-like platform/users_edit.php");
        exit;
    }
    $task_id = $_GET["task_id"];
    $sql = "SELECT * FROM tasks WHERE task_id=$task_id";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $task_id = $row["task_id"];
        $user_id = $row["user_id"];
        $category_id = $row["category_id"];
        $title = $row["title"];
        $description = $row["description"];
        $budget = $row["budget"];
        $deadline = $row["deadline"];
        $status = $row["status"];

    } else {
        header("location: /taskrabbit-like platform/users_edit.php");
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["task_id"]) || empty($_POST["user_id"]) || empty($_POST["category_id"]) || empty($_POST["title"]) || empty($_POST["description"]) || empty($_POST["budget"]) || empty($_POST["deadline"]) || empty($_POST["status"])) {
        echo "All fields are required!";
    } else {
        $task_id = $_POST["task_id"];
        $user_id = $_POST["user_id"];
        $category_id = $_POST["category_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $budget = $_POST["budget"];
        $deadline = $_POST["deadline"];
        $status = $_POST["status"];
        
        $sql = "UPDATE tasks SET user_id='$user_id', category_id='$category_id', title='$title', description='$description', budget='$budget', deadline='$deadline', status='$status' WHERE task_id='$task_id'";
        
        if ($connection->query($sql) === TRUE) {
            echo "Information updated successfully";
            header("location: /taskrabbit-like platform/tasks_table.php");
            exit;
        } else {
            echo "Error updating record: " . $connection->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/stylee.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Task Rabbit-Platform</title>
</head>
<body>
    <center>
        <h2>TASK RABBIT-LIKE PLATFORM</h2>
        <h3 style="color:green;">UPDATE TASKS HERE</h3>
        <section class="forms">
            <form method="POST">
                <label>ID</label><br>
                <input type="text" name="task_id" readonly class="input" value="<?php echo $task_id; ?>"><br>
                <label>User Id</label><br>
                <input type="text" name="user_id" class="input" value="<?php echo $user_id; ?>"><br>
                <label>category Id</label><br>
                <input type="text" name="category_id" class="input" value="<?php echo $category_id; ?>"><br> 
                <label>Title</label><br>
                <input type="text" name="title" readonly value="<?php echo $title; ?>" class="input"><br> 
                <label>Description</label><br>
                <input type="text" name="description" value="<?php echo $description; ?>" class="input"><br>  
                <label>Budget</label><br>
                <input type="number" name="budget" value="<?php echo $budget; ?>" class="input"><br>
                <label>Deadline</label><br>
                <input type="date" name="deadline" value="<?php echo $deadline; ?>" class="input"><br>
               <label>Status</label><br>
<select name="status" class="input">
    <option value="Open" <?php if ($status == "Open") echo "selected"; ?>>Open</option>
    <option value="In Progress" <?php if ($status == "In Progress") echo "selected"; ?>>In Progress</option>
    <option value="Completed" <?php if ($status == "Completed") echo "selected"; ?>>Completed</option>
</select><br>

                <input type="submit" name="submit" value="Update" class="sb">
            </form>
        </section>
    </center>
    <footer>
        <p><h1>Designed by Samuel-Niyomurengezi &copy; YEAR TWO BIT GROUP A &reg; 2024</h1></p>
    </footer>
</body>
</html>
