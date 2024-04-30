<?php 
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $uid = $_GET["uid"];

    // Read the row of the selected product from the database
    $sql = "SELECT * FROM user WHERE uid=$uid";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $tin_number = $row["tin_number"];
        $address = $row["address"];
        $email = $row["email"];
        $registration_date = $row["registration_date"];
        $agent_id = $row["agent_id"];
    } else {
        header("location: /myproject/user_table.php");
        exit;
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_POST["uid"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $tin_number = $_POST["tin_number"];
    $address = $_POST["address"];
    $email=$_POST['email'];
    $registration_date=$_POST["registration_date"];
    $agent_id=$_POST["agent_id"];

    if (empty($uid) || empty($first_name) || empty($last_name) || empty($tin_number) || empty($address) || empty($email) || empty($registration_date) || empty($agent_id)) {
        echo "All feild are required!";
    }else {
        $sql = "UPDATE user SET uid='$uid', first_name='$first_name', last_name='$last_name', tin_number='$tin_number', address='$address',email='$email',registration_date='$registration_date',agent_id='$agent_id' WHERE uid='$uid'";
    }
    if ($connection->query($sql) === TRUE) {
        echo " information updated successfully";
        header("location:/myproject/user_table.php");
    }else {
        echo "Error updating record: " . $connection->error;
    
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enterprise Management system</title>
    <script>
        function confirmUpdate() {
            return confirm('Do you want to update this record!');
        }
    </script>
    <style>
        h2{
            font-family:Castellar;
            color: darkblue;
        }
        label{
            font-family: elephant;
            font-size: 20px;
        }
        .sb{
            font-family:Georgia;
            padding: 10px;
            border-color: blue;
            background-color: skyblue;
            width: 200px;
            margin-top: 5px;
            border-radius: 12px;
            font-weight: bold;
            color: blue;

        }

        .input{
            width: 350px;
            height: 35px;
            border-radius: 12px;
            border-color: green;
        }

    </style>
</head>
<title>Update user</title>
 <!-- JavaScript validation and content load for update or modify data-->
    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update this record?');
        }
    </script>
<body>
<center>
    
    <h2>GOVERNMENT REVENUE MANAGEMENT SYSTEM </h2>
    <h3 style="color:green;">UPDATE USER HERE</h3>
    <!-- section that contain form that help to update supply information-->
    <form method="POST" onsubmit="return confirmUpdate();">
    <label>User Id</label><br>
    <input type="text" name="uid" readonly class="input" value="<?php echo $uid; ?>"><br>
     <label>First Name</label><br>
    <input type="text" name="first_name"  class="input" value="<?php echo $first_name; ?>"><br>
    <label>last_name</label><br>
    <input type="text" name="last_name" class="input" value="<?php echo $last_name; ?>"><br> 
    <label>tin_number </label><br>
    <input type="text" name="tin_number" readonly value="<?php echo $tin_number; ?>" class="input"><br> 
    <label>address Number</label><br>
    <input type="text" name="address" value="<?php echo $address; ?>" class="input"><br>  
    <label>email</label><br>
    <input type="text" name="email" value="<?php echo $email; ?>" class="input"><br>
    <label>registration_date</label><br>
    <input type="date" name="registration_date" value="<?php echo $registration_date; ?>" class="input"><br>
    <label>agent_id</label><br>
    <input type="text" name="agent_id" value="<?php echo $agent_id; ?>" class="input"><br>
    <input type="submit" name="submit" value="Update" class="sb">
</form>

</section>
</center>
        <footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
</body>
</html>