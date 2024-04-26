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
        <h1 class="text-center"><u>Agent Form</u></h1>
        <form action="agent_table.php" method="POST">
            <div class="form-group">
                <label for="agid">ID</label>
                <input type="number" class="form-control" name="agid" id="agid">
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name">
            </div>
            <div class="form-group">
                <label for="telephone">Tel Number</label>
                <input type="number" class="form-control" name="telephone" id="telephone">
            </div>
            <div class="form-group">
                <label for="adminnid">Adminn Id</label>
                <select name="aid" id="aid">
                    <?php
                    include "dbconnection.php";
                    $sql="SELECT aid ,first_name from adminn";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $aid=$row['aid'];
                            $first_name=$row['first_name'];
                            echo "<option value=\"$aid\"> $aid $first_name </option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="managerid">Manager Id</label>
                <select name="mid" id="mid">
                    <?php
                    include "dbconnection.php";
                    $sql="SELECT mid ,first_name from manager";
                    $result=$connection->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $mid=$row['mid'];
                            $first_name=$row['first_name'];
                            echo "<option value=\"$mid\"> $mid $first_name </option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
    </div>

    <footer class="text-center"><!-- Footer section -->
        <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
    </footer><!-- Footer section -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
