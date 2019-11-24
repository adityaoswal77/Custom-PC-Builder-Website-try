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

<html>
<head>
<title>admin</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">ADMIN Page</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:chocolate; border-radius:40px; height:45px"><a href="./insert.php">INSERT A NEW ITEM</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./login.php"> DELETE </a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./update.php"> UPDATE </a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="'/logout.php"> LOGOUT </a></li>
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


<?php
include ('./connect.php')
?>
<html>
<body>
    <form name="login" action="connect.php" method="GET"> 
            <h1 id="">ADD A NEW ITEM</h1>
            <p>Please fill in this form to add a new item</p>
            <hr>
            <label for="itemcompany"><b>Company Name</b></label>
            <input type="text" placeholder="Enter the Company Name" name="itemcompany" required>
            <hr>
            <label for="itemname"><b>Item Name</b></label>
            <input type="text" placeholder="Enter the Item Name" name="itemname" required>
            <hr>
            <label for="iteminfo"><b>Item Info</b></label>
            <input type="text" placeholder="Enter the item info" name="iteminfo" required>
            <hr>
            <label for="itemprice"><b>Item Price</b></label>
            <input type="number" placeholder="Enter the Item price" name="itemprice"required >
            <hr>
            <label for="itemtype"><b>Item Type</b></label>
            <input type="text" placeholder="Enter the item type" name="itemtype" required>
            <input type="submit">
    </form>
          
        </body>
</html>
<?php
include("connect.php");
if($_GET['submit'])
{
    $company = $_GET['itemcompany'];
    $name = $_GET['itemname'];
    $info = $_GET['iteminfo'];
    $price = $_GET['itemprice'];
    $type = $_GET['itemtype'];

$query="INSERT INTO `item`(`item_company`, `item_name`, `item_info`, `item_price`, `item_type`) VALUES ('$company','$name','$info','$price','$type')";
$row = mysqli_query($conn,$query);
if ($row==TRUE)
{
    echo " Welcome" .$row['name'] ;
    echo "Item has been successfully added";
}
else{
    echo "Item has not been registered";
}
}
?>