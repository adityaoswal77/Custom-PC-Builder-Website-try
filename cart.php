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
<?php
$uid = $_SESSION['uid'];
$query_cart = "SELECT `item_id`, `item_name`, `item_price`, `user_id` FROM `cart` WHERE `user_id` = '$uid' ";
$run_cart = mysqli_query($conn, $query_cart);

//$data_cart = mysqli_fetch_assoc($run_cart);
//$item_id = $data_cart['item_id'];
//$query_item = "SELECT `Item_id`, `brand_name`, `Item_name`, `item_img`, `item_info`, `original_price`, `Item_price`, `Item_condition`, `type`, `s_id` FROM `items` WHERE `Item_id`='$item_id'";
// $run_item = mysqli_query($conn, $query_item);

?>

<html>
<head>
    <title>Cart</title>
</head>
<body>
        <center>
    <h1>CART</h1>

    <div class="topnav">
    
        <hr>
            <ul>        <li style="background-color:blue; border-radius:20px;height:50px"><a href="./home.php">Home</a></li>
                        <li style="background-color:chocolate; border-radius:20px; height:50px"><a href="./logout.php"> Logout </a></li>
                        <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./cart.php"> cart</a></li>
            </ul>      
        <hr>      
    </div>
        </center>
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

table{
    border-collapse:collapse;
    border-style:solid; 
}

table, th,td{
    border:1px solid black;
    border-width:3px;
    border-color:#3f3f3f; 
    padding:10px; 
}
</style>

    <table>
        <tr>
            <th>cpu</th>
            <th>gpu</th>
            <th>ram</th>
            <th>ssd</th>
        </tr>
<?php
$conn = mysqli_connect("localhost","root","","custom");
if ($conn == false)
{	echo "no connection";}
else {	echo "successfully connected";}

$query = "SELECT `cart_cpu`,`cart_gpu`,`cart_ram`,`cart_ssd` FROM `cart`" ;
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr><td>". $result['cart_cpu'] ."</td><td>". $result['cart_gpu']. "</td><td> " .$result['cart_ram']. "</td><td>" .$result['cart_ssd']. "</td></tr>";
    echo "||";
	}
	echo "table has records";
}
else
{	echo " table has no records";   }
?>
    </table>
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

</body>
</html>