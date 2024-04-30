<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>
    body {
            background-image: url('./css/img03.jpg');
            color: orange;
            padding: 22px;
            font-family: Elephant;
            font-weight: bold;
            font-size: 30px;
            text color: orange;
        }
        </style>
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="login.php" method="POST">
                <h1 class="text-center mb-4">LOGIN FORM</h1>
                <div class="form-group">
                    <label for="username"><h2>Username</h2></label>
                    <input type="text" class="form-control" id="username" name="username" required="">
                </div>
                <div class="form-group">
                    <label for="password"><h2>Password</h2></label>
                    <input type="password" class="form-control" id="password" name="password" required="">
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary mr-2">Login</button>
                    <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
                </div>
                <p>If you don't have an account, click here to <a href="registration.php"><b>Sign Up</b></a></p>
                <p> click here to <a href="resetpassword.php" class="btn btn-secondary" style="margin-left: 100px;"><b>RESET PASSWORD</b></a></p>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript (optional if you're not using Bootstrap JS features) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
