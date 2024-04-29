<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body><br><br>
    <a href="home.html" style="background-color: blue; border-radius: 8px; color:white; padding: 12px; "> Back Home</a><br>
    <div class="container">
        <h1 class="text-center"><u>Transaction Form</u></h1>
        <form action="transaction_table.php" method="POST">
            <div class="form-group">
                <label for="tid">ID</label>
                <input type="number" class="form-control" name="tid" id="tid">
            </div>
            <div class="form-group">
                <label for="userid">User Id</label>
                <select id="uid" class="form-control">

                    <?php
                    include "dbconnection.php";
                    $sql="SELECT uid ,last_name from user";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $uid=$row['uid'];
                            $last_name=$row['last_name'];
                            echo "<option value=\"$uid\"> $uid $last_name </option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="revenueid">Revenue Id</label>
                <select id="rid" class="form-control">
                    <?php
                    include "dbconnection.php";
                    $sql="SELECT rid  from revenue";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $rid=$row['rid'];
                            echo "<option value=\"$rid\"> $rid </option>";
                        }
                    }
                    ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
    </div>
    <footer class="text-center mt-5"><!-- Footer section -->
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
    </footer><!-- Footer section -->

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
