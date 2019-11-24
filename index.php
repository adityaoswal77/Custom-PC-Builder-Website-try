<?php
session_start();
if(isset($_SESSION["uid"]))
{
    //header("location:index.php");
}
else{
    header("location:login.php");
}
include("./connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
   <title>Home</title>
</head>
<body>
    <center>
    <div class="container">
        <div class = "outer">
        <h1 style="color:skyblue;border:2px solid black">CUSTOM <br> PC BUILDER</h1> <br>
            <div class="details">

    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:20px;height:50px"><a href="./home.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:20px; height:50px"><a href="./login.php"> Login </a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./register.php"> Register</a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./admin.php"> Admin</a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./cart.php"> cart</a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./logout.php"> Logout</a></li>
</ul>      
    <hr>      
</div>
</div>

</body>
</center>
</html>

<style>
body {
	background-image: url("./ac.jpg");
	background-color: #cccccc;
	background-size: cover;
	background-repeat: no-repeat;
}
h1{
    padding:20px;
}
ul {
    margin:0;
    padding:0;
}
ul li{
    text-decoration:none;
    display:inline;
    padding:0 20px 0 20px;
    width:45px;
}
ul li a{
    
    text-decoration:none;
    color:white;
}
body {
 background-image: url("./ac.jpg");
 background-color: #cccccc;
 background-size : cover;
 background-repeat : no-repeat;
}
</style>