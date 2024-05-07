<?php
include "menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task rabbit-like platform</title>
  <style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: skyblue;
        }
.navigation a:link{
    color: white;
    background-color:none;
    padding: 5px;
    margin: 5px;
      border-radius: 15px;

}
.navigation a:visited{
    color: white;
    background-color:none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
.navigation a:hover{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
     border-radius: 15px;
}
 .navigation a:active{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
  .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color:teal;
            border-bottom: 5px solid black;
            position: absolute;
            top: 0px;
            width: 100%;
            left: 0px;
        }
        .logo {
            width: 60px; /* Adjust logo size */
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align:none;
            flex-grow: 2; 
        }
        .navigation li {
            display: inline-block;
            margin-right: 5px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #333;
        }
        .p1{
            font-size: 20px;
            color: black;
            text-align: center;

        }
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
      }
      .dropdown-contents{
  display: none;
  position: absolute;
  background-color:deeppink;
 text-decoration: none;
}
.dropdown-contents a{
  color: black;
  text-decoration: none;
  display: block;
}
.dropdown-contents a :hover{
 background-color: red;
}
.dropdown:hover .dropdown-contents{
  display:block;
}
    </style>
</head>
<div class="container">
    <h1>About Us</h1>
     <div style="background-color: chocolate;"><p style="color: blue;font-size: 20px; font-weight: bold;">Welcome to our online employee attendance system!</p>
        <p>We are dedicated to providing an efficient and reliable solution for managing employee attendance.</p>
        <p>Our system helps businesses streamline their attendance tracking process, saving time and resources.</p>
        <p>With our user-friendly interface and comprehensive features, managing attendance has never been easier.</p>
        <p>Our team is committed to continuous improvement and customer satisfaction. We strive to meet the unique needs of each organization we serve.</p>
        <p>Thank you for choosing our employee attendance system. We look forward to helping you optimize your workforce management.</p> 
        </div><br><h2 style="color: indigo;">Our mission </h2>
     <p>  Facilitate and improve how  employee  making attendance on their jobs without using manual method like recording on books and also this app have been used by manager to tracking employee attendance and also using in applying leave ,holidays and other services.This make more enjoyable work place on both side of manger and their employees.</p>
  
    <h2 style="color: red;">Our Team</h2>
    <div style="background-color: violet;">
    <p >Meet the faces behind our company:</p>
    <ul>
      <li><strong>AIMEE DIANE KUBWIMANA</strong> - CEO</li>
      <li><strong>DIANE UWAMARIYA</strong> - Marketing Director</li>
      <li><strong>MUGABO JEAN BERTHRA</strong> - Head of Operations</li>
      <!-- Add more team members as needed -->
    </ul></div>
    
    <h2>Our History</h2>
    <p>our company was founded in 01/08/2022 by friends company ltd. Since then, we have been committed to brief history of your company, milestones.</p>
    
    <div style="background-color: purple;"><h2 style="color: orange;">Our Milestones</h2>
    <p>Over the years, we've achieved several milestones:</p>
    <ul>
      <li><strong>01/082022</strong> - Founded the company with a small team of web designer friends.</li>
      <li><strong>13/12/2022</strong> - Launched our first major production event was colled NEW RWANDAN PRODUCTION .</li>
      <li><strong>20/09/2023</strong> - Expanded our services to include we make upgrading our system by adding new menus like help and setting .</li>
      <!-- Add more milestones as needed -->
    </ul></div>
  
  
  </div>



<div><footer>
    <p>Designed by Samuel-Niyomurengezi &copy; YEAR TWO BIT GROUP A &reg; 2024</p>
</footer>
</body>
</html>
