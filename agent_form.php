
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center"><u>Agent Form</u></h1>
        <form action="agent_table.php" method="POST">
            <div class="form-group">
                <label for="agid">ID</label>
                <input type="number" class="form-control" name="agid" uid="agid">
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
                <input type="number" class="form-control" name="adminnid" id="adminnid">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="managerid">Manager Id</label>
                <input type="number" class="form-control" name="managerid" id="managerid">

              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
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
                <input type="number" class="form-control" name="adminnid" id="adminnid">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Manager id</label><br>
    <select name="managerid" id="managerid" class="input"> 
        <?php
        $query = "SELECT managerid,name FROM user";
        $result = $connection->query($query);
        
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $managerid = $row['managerid'];
                $name= $row['first_name'];
                echo "<option value=\"$managerid\">$name</option>";
            }
        } else {
            echo "<option value=\"\">No users found</option>";
        }
        ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
        <form action="home.html">
            <button type="submit" class="btn btn-secondary">BACK TO HOME</button>
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

              

            </div>
            <button type="submit" class="btn btn-primary">INSERT</button>
        </form>
        <form action="home.html">
            <button type="submit" class="btn btn-secondary">BACK TO HOME</button>
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
