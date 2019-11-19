<!DOCTYPE html>
<html lang="en">
<head>
    <script src="formscript.js"></script>
    <title>choose your motherboard</title>
</head>
<body>

<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">THE CUSTOM PC BUILDER</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:40px;height:45px"><a href="temp.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./login.php"> Login </a></li>
    <li style="background-color:chocolate;border-radius:40px; height:25px"><a href="./register.php"> Register</a></li>
</ul>      
    <hr>      

</div>

</center>
    <div id="form-div" style="position:relative; left:20% ;padding:20px; background-color:">
        <h1>Choose your motherboard</h1>
        <form action="#" method = "post" >
            <div>
            <label for="name"><b>Give your rig a name</b></label>
            <input type="text" placeholder="Enter your Name" name="name" >
            <hr>
           </div>
    <div>
        <label>Select Motherboard</label>
        <select name="motherboard" onchange="fetchcpu(this.value)"> 
            <option  > Select Motherboard</option>
            <option > Msi</option>
            <option > Asus</option>
        </select>

    </div>
    <div>
        <label for="#">Select CPU</label>
        <select id="cpu" name="CPU">
            <option>First Select Motherboard</option>
        </select>   
    </div>
    <div>
        <input type="submit" onsubmit="formpro.php" value="Submit" >
    </div>

            </form>
        </div>

    </body>
</html>

<?php

$CPU = $_GET['CPU'];
$name = $_GET['name'];
$Mother = $_GET['motherboard'];


$query="INSERT INTO `build`(`name`, `cpu`, `motherboard`) VALUES('$CPU','$name','$Mother')";
echo $query;
$run = mysqli_query($conn,$query);

if ($run==TRUE)
{
    echo " Welcome" .Srun['name'] ;
    echo "Item has been successfully added";
}
else{
    echo "Item has not been registered";
}
?>


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

</style>