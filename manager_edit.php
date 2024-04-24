<?php 
//call the file that contain database connection
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $mid = $_GET["mid"];

    // Read the row of the selected manager from the database
    $sql = "SELECT * FROM manager WHERE mid=$mid";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $address = $row["address"];
        $specialization = $row["specialization"];
    } else {
        header("location: /myproject/admin_table.php");
        exit;
    }
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mid = $_POST["mid"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $address=$_POST['address'];
    $specialization=$_POST["specialization"];

    if (empty($mid) || empty($first_name) || empty($last_name) || empty($address) || empty($specialization)) {
        echo "All feild are required!";
    }else {
        $sql = "UPDATE manager SET mid='$mid', first_name='$first_name', last_name='$last_name', address='$address', specialization='$specialization' WHERE mid='$mid'";
    }
    if ($connection->query($sql) === TRUE) {
        echo " information updated successfully";
        header("location:/myproject/manager_table.php");
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
    <title></title>
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
<center>
    
    <h2>GOVERNMENT REVENUE MANAGEMENT SYSTEM </h2>
    <h3 style="color:green;">UPDATE MANAGER HERE</h3>
    <!-- section that contain form that help to update manager information-->
    <section class="forms">
        <form method="POST">
    <label>Admin Id</label><br>
    <input type="text" name="mid" readonly class="input" value="<?php echo $mid; ?>"><br>
     <label>First Name</label><br>
    <input type="text" name="first_name"  class="input" value="<?php echo $first_name; ?>"><br>
    <label>last_name</label><br>
    <input type="text" name="last_name" class="input" value="<?php echo $last_name; ?>"><br> 
    <label>address </label><br>
    <input type="text" name="address" class="input" value="<?php echo $address; ?>" class="input"><br> 
    <label>specialization</label><br>
    <input type="text" name="specialization" class="input" value="<?php echo $specialization; ?>"><br> 
    <input type="submit" name="submit" value="Update" class="sb">
</form>

</section>
</center>
        <footer><!-- Footer section -->
            <p><h1>&copy &reg 2024 UR CBE BIT YEAR 2 @ Group A</h1></p><!-- Copyright and trademark notice -->
        </footer><!-- Footer section -->
    </body>
    </html>