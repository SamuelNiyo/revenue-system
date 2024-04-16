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
        <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF Admin IN OUR THE SYSTEM</h4>
        <a href="manager_form.html" class="btn btn-primary" style="margin-top: 0px;">New Admin</a>
        <a href="home.html" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
        <table class="table table-bordered">
            <thead class="bg-warning">
<?php
// Connection details
$host = "localhost";
$user = "root";
$pass = "";
$database = "revenuesystem";

// Cxfhbfdgnhgfjnreating connection
$connection = new mysqli($host, $user, $pass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the parameters
 $stmt = $connection->prepare("INSERT INTO manager (id, first_name, last_name, address, specialization) VALUES (?, ?, ?, ?, ?,)");
$stmt->bind_param("ssssi", $id, $first_name, $last_name, $address, $specialization);

// Set parameters
$id = $_POST['id'];
$first_name = $_POST['first_name'];    
$last_name = $_POST['last_name']; 
$address = $_POST['address']; 
$specialization = $_POST['spesialization'];

// Execute the statement
if ($stmt->execute()) {
    echo "New record has been added successfully";
} else {
    echo "Error: " . $stmt->error;
}
    // Close the statement
    $stmt->close();

}
// SQL query to fetch data from the maanager table
$sql = "SELECT * FROM manager";
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
    padding: 15px;
    color: white;
    background-color: blue;
}
    </style> 
</head>
<body>
    <center><h2>MANAGERS</h2></center>
    <table border="5">
        <table border="8">
        <tr>
            <th> id</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>address</th>
            <th>specialization</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        // Check if there are any adminn
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $aid = $row['id']; // Fetch the admin id
                echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['specialization'] . "</td>
                    <td><a style='padding:4px' href='deleteuser.php?id=$aid'>Delete</a></td> 
                    <td><a style='padding:4px' href='update_car.php?id=$aid'>Update</a></td> 
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
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