<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">Admin Page</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:40px;height:45px"><a href="insert.php">INSERT A NEW ITEM</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./login.php"> Delete </a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="fetch.php"> Display </a></li>

</ul>      
    <hr>      

</div>
</body>
</center>
</html>

<style>
h1{
    padding:20px
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
.active{
    background-color:#0000ff;
}

</style>