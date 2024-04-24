<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Revenue System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; font-family: century; font-weight: bold;">GOVERNMENT REVENUE MANAGEMENT SYSTEM</h2>
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF USERS IN OUR SYSTEM</h4>
        <a href="user_form.html" class="btn btn-primary" style="margin-top: 0px;">New User</a>
        <a href="home.html" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
<?php
include "dbconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $connection->prepare("INSERT INTO revenue (rid, amount, revenue_type) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $rid, $amount, $revenue_type);

    $rid = $_POST['rid'];
    $amount = $_POST['amount'];    
    $revenue_type = $_POST['revenue_type']; 

    if ($stmt->execute()) {
        echo "New record has been added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$sql = "SELECT * FROM revenue";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenue System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        footer {
            height: 50px;
            text-align: center;
            padding: 15px;
            color: white;
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center font-weight-bold">GOVERNMENT REVENUE MANAGEMENT SYSTEM</h2>
        <h4 class="text-center font-weight-bold">LIST OF REVENUES RECEIVED</h4>
        <a href="revenue_form.html" class="btn btn-primary mb-2">New Revenue</a>
        <a href="home.html" class="btn btn-secondary mb-2">Back Home</a>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>rid</th>
                    <th>amount</th>
                    <th>revenue_type</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['rid']}</td>
                            <td>{$row['amount']}</td>
                            <td>{$row['revenue_type']}</td>
                            <td><a href='revenue_delete.php?rid={$row['rid']}' class='btn btn-danger'>Delete</a></td>
                            <td><a href='revenue_edit.php?rid={$row['rid']}' class='btn btn-success'>Edit</a></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No data found</td></tr>";
                }
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
