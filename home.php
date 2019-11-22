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
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:2px solid black">THE CUSTOM PC BUILDER</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:20px;height:50px"><a href="./home.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:20px; height:50px"><a href="./login.php"> Login </a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./register.php"> Register</a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./admin.php"> Admin</a></li>

</ul>      
    <hr>      

</div>

<div class="intro">
    <h2>Welcome to the Custom Builder.</h2>
    <h4>Build your own dream PC using our Website.</h4>
    <a href="form.php">Click here to get Started</a>
    <div>
    
    </div>
</div>

</body>
</center>
</html>

<style>
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

</style>