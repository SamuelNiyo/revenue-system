<?php 
include "dbconnection.php";
include "menu.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/styleee.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Task Rabbit-like Platform</title>
    <script>
        function confirmInsert() {
            return confirm('Do you want to insert this record?');
        }
    </script>
</head>
<body>
    <center>
        <h2>TASK RABBIT-LIKE PLATFORM</h2>
        <section class="forms">
            <form action="service_provider.php" method="POST" class="sp" onsubmit="return confirmInsert();">
                <h3 style="color:green;">TASKS PROVIDER FORM</h3>
                <label>ID</label><br>
                <input type="text" name="serviceprovider_id" required class="input"><br>
                <div class="form-group">
                    <label for="user_id">User Id</label>
                    <select id="user_id" class="form-control" name="user_id">
                        <?php
                        $sql = "SELECT user_id, username FROM users";
                        $result = $connection->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row['user_id'];
                                $username = $row['username'];
                                echo "<option value=\"$user_id\"> $user_id $username </option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address_id">Address Id</label>
                    <select id="address_id" class="form-control" name="address_id">
                        <?php
                        $sql = "SELECT address_id, district FROM address";
                        $result = $connection->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $address_id = $row['address_id'];
                                $district = $row['district'];
                                echo "<option value=\"$address_id\"> $address_id $district </option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="role_id">Role Id</label>
                    <select id="role_id" class="form-control" name="role_id">
                        <?php
                        $sql = "SELECT role_id, department FROM role";
                        $result = $connection->query($sql);
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $role_id = $row['role_id'];
                                $department = $row['department'];
                                echo "<option value=\"$role_id\"> $role_id $department </option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <label>Description</label><br>
                <input type="text" name="description" required class="input"><br>
                <label>Hourly Rate</label><br>
                <input type="number" name="hourly_rate" required class="input"><br>
                <label>Rating</label><br>
                <input type="date" name="rating" required class="input"><br>
                <input type="submit" name="submit" value="SUBMIT" class="sb">
                <input type="reset" name="reset" value="CANCEL" class="cn">
            </form>
            <br><br><br><br><br><br><br><br><br><br>
        </section>
    </center><br><br>
    <footer>
        <p>Designed by Samuel-Niyomurengezi &copy; YEAR TWO BIT GROUP A &reg; 2024</p>
    </footer>
</body>
</html>
