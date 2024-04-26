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
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF AGENTS IN OUR SYSTEM</h4>
        <a href="agent_form.html" class="btn btn-primary" style="margin-top: 0px;">New User</a>
        <a href="home.html" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
<?php
// Connection details
include "dbconnection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
 $stmt = $connection->prepare("INSERT INTO agent (agid, first_name, last_name, telephone, adminnid, managerid) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issiii", $agid, $first_name, $last_name, $telephone, $adminnid, $managerid);

// Set parameters
$agid = $_POST['agid'];
$first_name = $_POST['first_name'];    
$last_name = $_POST['last_name'];
$telephone = $_POST['telephone'];
$adminnid = $_POST['adminnid']; 
$managerid = $_POST['managerid']; 

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
$sql = "SELECT * FROM agent";
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
            <th>agid</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>telephone</th>
            <th>adminnid</th>
            <th>managerid</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php

        // Check if there are any cars
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $agid = $row['agid']; // Fetch the car Id
                echo "<tr>
                    <td>" . $row['agid'] . "</td>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['telephone'] . "</td>
                    <td>" . $row['adminnid'] . "</td>
                    <td>" . $row['managerid'] . "</td>
             <td><a style='padding:4px' href='agent_delete.php?agid={$row['agid']}'>Delete</a></td>
                <td><a style='padding:4px' href='agent_edit.php?agid={$row['agid']}'>edit</a></td> 
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