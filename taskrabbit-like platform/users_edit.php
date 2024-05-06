<?php
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["user_id"])) {
        header("location: /taskrabbit-like platform/users_edit.php");
        exit;
    }
    $user_id = $_GET["user_id"];
    $sql = "SELECT * FROM users WHERE user_id=$user_id";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row["user_id"];
        $username = $row["username"];
        $email = $row["email"];
        $password = $row["password"];
        $user_type = $row["user_type"];
        $registration_date = $row["registration_date"];
    } else {
        header("location: /taskrabbit-like platform/users_edit.php");
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["user_id"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["user_type"]) || empty($_POST["registration_date"])) {
        echo "All fields are required!";
    } else {
        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user_type = $_POST["user_type"];
        $registration_date = $_POST["registration_date"];
        
        $sql = "UPDATE users SET username='$username', email='$email', password='$password', user_type='$user_type', registration_date='$registration_date' WHERE user_id='$user_id'";
        
        if ($connection->query($sql) === TRUE) {
            echo "Information updated successfully";
            header("location: /taskrabbit-like platform/users_table.php");
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
        <h3 style="color:green;">UPDATE USERS HERE</h3>
        <section class="forms">
            <form method="POST">
                <label>ID</label><br>
                <input type="text" name="user_id" readonly class="input" value="<?php echo $user_id; ?>"><br>
                <label>User Names</label><br>
                <input type="text" name="username" class="input" value="<?php echo $username; ?>"><br>
                <label>Email</label><br>
                <input type="text" name="email" class="input" value="<?php echo $email; ?>"><br> 
                <label>Password</label><br>
                <input type="text" name="password" readonly value="<?php echo $password; ?>" class="input"><br> 
                <label>User Type</label><br>
                <input type="text" name="user_type" value="<?php echo $user_type; ?>" class="input"><br>  
                <label>Registration Date</label><br>
                <input type="date" name="registration_date" value="<?php echo $registration_date; ?>" class="input"><br>
                <input type="submit" name="submit" value="Update" class="sb">
            </form>
        </section>
    </center>
    <footer>
        <p><h1>Designed by Samuel-Niyomurengezi &copy; YEAR TWO BIT GROUP A &reg; 2024</h1></p>
    </footer>
</body>
</html>
