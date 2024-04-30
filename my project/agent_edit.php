<?php 
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $agid = $_GET["agid"];

    // Read the row of the selected product from the database
    $sql = "SELECT * FROM agent WHERE agid=$agid";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $telephone = $row["telephone"];
        $adminnid = $row["adminnid"];
        $managerid = $row["managerid"];
    } else {
        header("location: /myproject/agent_table.php");
        exit;
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $agid = $_POST["agid"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $telephone = $_POST["telephone"];
    $adminnid = $_POST["adminnid"];
    $managerid=$_POST["managerid"];
    if (empty($agid) || empty($first_name) || empty($last_name) || empty($telephone) || empty($adminnid) || empty($managerid)) {
        echo "All feild are required!";
    }else {
        $sql = "UPDATE agent SET agid='$agid', first_name='$first_name', last_name='$last_name', telephone='$telephone', adminnid='$adminnid',managerid='$managerid' WHERE agid='$agid'";
    }
    if ($connection->query($sql) === TRUE) {
        echo " information updated successfully";
        header("location:/myproject/agent_table.php");
    }else {
        echo "Error updating record: " . $connection->error;
    
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <!-- JavaScript validation and content load for update or modify data-->
    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update this record?');
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <section class="forms">
       <form method="POST" onsubmit="return confirmUpdate();">
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
<body>
<center>
    
    <h2>GOVERNMENT REVENUE MANAGEMENT SYSTEM </h2>
    <h3 style="color:green;">UPDATE USER HERE</h3>
    
    <label>Agent Id</label><br>
    <input type="number" name="agid" readonly class="input" value="<?php echo $agid; ?>"><br>
     <label>First Name</label><br>
    <input type="text" name="first_name"  class="input" value="<?php echo $first_name; ?>"><br>
    <label>last_name</label><br>
    <input type="text" name="last_name" class="input" value="<?php echo $last_name; ?>"><br> 
    <label>telephone </label><br>
    <input type="number" name="telephone" class="input" value="<?php echo $telephone; ?>"><br>
    <label>adminnid Number</label><br>
    <input type="number" name="adminnid" value="<?php echo $adminnid; ?>" class="input"><br>  
    <label>managerid</label><br>
    <input type="text" name="managerid" value="<?php echo $managerid; ?>" class="input"><br>
    <input type="submit" name="submit" value="Update" class="sb">
</form>

</section>
</center>
        <footer><!-- Footer section -->
            <p>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
</body>
</html>