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
function get_recent()
{
    global $run_cart;
    if ($run_cart == true) 
    {
    while ($data = mysqli_fetch_assoc($run_cart)) {
    ?>
    <div>
    <table style="border:1px solid black;margin-top:2%">
    <tr>
    <th>Item_id</th>
    <th>item_name</th>
    <th>item_price</th>

    </tr>

    <tr style="padding:50px;">
    <td><?php echo $data["item_id"]; ?></td>
    <td><?php echo $data["Item_name"]; ?></td>
    <td><?php echo $data["Item_price"]; ?></td>

    </tr>


    <tr>
    <input type="hidden" name="item_id" value="<?php echo $data["Item_id"]; ?>">
    <input type="hidden" name="item_name" value="<?php echo $data["Item_name"]; ?>">
    <input type="hidden" name="item_price" value="<?php echo $data["Item_price"]; ?>">
    <td><input type="submit" name="delete" value="Delete" onclick="on_reset()"></td>
    </tr>


    </table>
             <script>
                function on_reset() 
                {
                document.getElementsByName("cart").resetForm();
                }
            </script>
        </form>
    </div>
    <?php
    }
    }


     else 
    {
        header("location:login.php");
    }
}
?>

<?php get_recent(); ?>

<html>
<head>
    <title>Cart</title>
</head>
<body>
        <center>
    <h1>CART</h1>

    <div class="topnav">
    
    <hr>
    <ul>
        <li style="background-color:blue; border-radius:20px;height:50px"><a href="./home.php">Home</a></li>
        <li style="background-color:chocolate; border-radius:20px; height:50px"><a href="./logout.php"> Logout </a></li>
        <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./cart.php"> cart</a></li>
    </ul>      
        <hr>      
    </div>
    
 
        </center>

    
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