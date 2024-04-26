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
// Connection details
include "dbconnection.php";
// Cxfhbfdgnhgfjnreating connection
$connection = new mysqli($host, $user, $pass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
 $stmt = $connection->prepare("INSERT INTO user (uid, first_name, last_name, tin_number, address, email, registration_date, agent_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssi", $id, $first_name, $last_name, $tin_number, $address, $email, $registration_date, $agent_id);

// Set parameters
$uid = $_POST['uid'];
$first_name = $_POST['first_name'];    
$last_name = $_POST['last_name'];
$tin_number = $_POST['tin_number'];
$address = $_POST['address']; 
$email = $_POST['email']; 
$registration_date = $_POST['registration_date'];
$agent_id = $_POST['agent_id'];

// Execute the statement
if ($stmt->execute()) {
    echo "New record has been added successfully";
} else {
    echo "Error: " . $stmt->error;
}
    // Close the statement
    $stmt->close();

}
// SQL query to fetch data from the car table
$sql = "SELECT * FROM user";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
         footer{
    height: 50px;
    text-align: center;
    padding: 25px;
    color: white;
    background-color: blue;
}
    </style> 
</head>
<body>
    <center><h2></h2></center>
    <table border="5">
        <table border="8">
        <tr>
            <th>uid</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>tin_number</th>
            <th>address</th>
            <th>email</th>
            <th>registration_date</th>
            <th>agent_id</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php

        // Check if there are any cars
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $uid = $row['uid']; // Fetch the car Id
                echo "<tr>
                    <td>" . $row['uid'] . "</td>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['tin_number'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['registration_date'] . "</td>
                    <td>" . $row['agent_id'] . "</td>
                    <td><a style='padding:4px' href='deleteuser.php?uid={$row['uid']}'>Delete</a></td>
                    <td><a style='padding:4px' href='user_edit.php?uid={$row['uid']}'>edit</a></td> 
                </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No data found</td></tr>";
        }
        // Close the database connection
        $connection->close();
        ?>
    </table>
</body>
</html>

</section>
  
<footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </center></footer><!-- Footer section -->
    </body>
    </html>