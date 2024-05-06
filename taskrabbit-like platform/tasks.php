<?php 
include "dbconnection.php";
include "menu.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/styleee.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Task Rabbit-like Platform</title>
    <script>
        function confirmInsert() {
            return confirm('Do you want to insert this record?');
        }
    </script>
</head>
<body>
    <center>
        <h2>TASK RABBIT-LIKE PLATFORM</h2>
        <section class="forms">
            <form action="users1.php" method="POST" class="sp" onsubmit="return confirmInsert();">
                <h3 style="color:green;">TASKS FORM</h3>
                <label>ID</label><br>
                <input type="text" name="task_id" required class="input"><br>
                <div class="form-group">
                    <label for="user_id">User Id</label>
                    <select id="user_id" class="form-control" name="user_id">
                        <?php
                        $sql = "SELECT user_id, username FROM users";
                        $result = $connection->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row['user_id'];
                                $username = $row['username'];
                                echo "<option value=\"$user_id\"> $user_id $username </option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">Category Id</label>
                    <select id="category_id" class="form-control" name="category_id">
                        <?php
                        $sql = "SELECT category_id, category_name FROM categories";
                        $result = $connection->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $category_id = $row['category_id'];
                                $category_name = $row['category_name'];
                                echo "<option value=\"$category_id\"> $category_id $category_name </option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <label>Title</label><br>
                <input type="text" name="title" required class="input"><br>
                <label>Description</label><br>
                <input type="text" name="description" required class="input"><br>
                <label>Budget</label><br>
                <input type="text" name="budget" required class="input"><br>
                <label>Deadline</label><br>
                <input type="date" name="deadline" required class="input"><br>
                <label>Status</label><br>
                <select name="status" class="input">
                    <option value="Open">Open</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select><br>
                <input type="submit" name="submit" value="SUBMIT" class="sb">
                <input type="reset" name="reset" value="CANCEL" class="cn">
            </form>
            <br><br><br><br><br><br><br><br><br><br>
        </section>
    </center><br><br>
    <footer>
        <p>Designed by Samuel-Niyomurengezi &copy; YEAR TWO BIT GROUP A &reg; 2024</p>
    </footer>
</body>
</html>
