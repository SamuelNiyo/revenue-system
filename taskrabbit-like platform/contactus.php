<?php
include "menu.php";
include"dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO messages(names,email,phone,message) VALUES('$name','$email','$message')";
    $result=$connection->query($sql);
    if ($result) {
        echo"Your Message Sent Successfully";
    }else{
        echo "Inserted fail";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/style.css" title="style1" media="screen,tv,print,handheld"/>
    <title>Task Rabbit-like Platform< - contact us</title>
</head>
<body>
    <center>
<div><p style="font-weight: bold;font-size: 25px;align-items: center;color: red;"><h2>WELCOME TO TASK RABBIT-LIKE PLATFORM WEBSITE</h2></p></div>
<div> 
            <h2>Contact Us</h2>
                <p>Email:Task-rabbit-likeplatform@yahoo.com</p>
                <p>Phone: +250788201441</p>
                <p>Address: Kigali-Rwanda</p><br>
</div>
<div><h5>For any urgent issues and help contact us on:<h5>
    <p>Email:samofficially250@gmail.com</p>
    <p>Phone:+250788657484</p>
    <p>Address:Kigali-Rwanda</p>

</div>
<div class="container">
        <h2>Submit  your suggestion  on us </h2>
        <form id="contactForm" onsubmit="return validateForm()">
            <label for="name">Names</label><br>
  <input type="text" id="name" name="name" class="type" required><br>

  <label for="email">Email</label><br>
  <input type="email" id="email" name="email" class="type" required><br>

  <label for="message">Message</label><br>
  <textarea id="message" name="message" rows="4"  required></textarea><br>

  <input type="submit" value="SUBMIT" style="background-color: #FF00FF; color: white; font-family: times new roman; font-weight: bold; font-size: 20px; height: 45px; border: none; border-radius: 8px; width: 130px; padding: 10px;">
</form> 
</center>
<div style="color: white;font-size: 25px;"><p>Connect with us on social media or social networkings:

  <a href="https://www.twitter.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF; padding: 10px; text-decoration: none;">TWITTER</a>
  <a href="https://www.facebook.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">FACEBOOK</a>
  <a href="https://www.instagram.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">INSTAGRAM</a>
  <a href="https://www.linkedin.com/pdas" style="color: white;font-size: 15px;background-color: #FF00FF;  padding: 10px; text-decoration: none;">LINKEDIN</a>
</p></div>

<div><footer><p><marque>Designed by Samuel-Officially &copy YEAR TWO BIT GROUP A &reg 2024</marque></p></footer></div>
</body>
</html>