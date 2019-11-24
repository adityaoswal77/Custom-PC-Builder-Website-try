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
    <li style="background-color:blue; border-radius:40px;height:45px"><a href="home.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./login.php"> Login </a></li>
    <li style="background-color:chocolate;border-radius:40px; height:25px"><a href="./register.php"> Register</a></li>
    <li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./cart.php"> cart</a></li>
   
</ul>      
    <hr>      

</div>

</center>
    <div id="form-div" style="position:relative; left:20% ;padding:20px; background-color:">
        <h1>Choose your motherboard</h1>
        <form action="form.php" method = "post" >
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
        <input type="submit" value="Submit" name="order">
    </div>



 <?php
 
 
$query="SELECT * FROM `build`";
echo $query;
$run = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($run);

 
 ?>   
    <input type="hidden" name="build_id"    value = "<?php echo $data['build_id'] ?>">
    <input type="hidden" name="cpu"         value = "<?php echo $data['cpu']; ?>">
    <input type="hidden" name="motherboard" value = "<?php echo $data['motherboard']; ?>">
    <input type="hidden" name="name"        value = "<?php echo $data['name']; ?>">
            </form>
        </div>
    </body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","custom");

$CPU = $_POST['cpu'];
$name = $_POST['name'];
$Mother = $_POST['motherboard'];
echo $CPU;
$query="INSERT INTO `build`(`name`, `cpu`, `motherboard`) VALUES('$CPU','$name','$Mother')";
echo $query;
$run = mysqli_query($conn,$query);

if ($run==TRUE)
{
    echo " Welcome" .$run['name'] ;
    echo "Item has been successfully added";
}
else
{
    echo "Item has not been registered";
}
if(isset($_POST['order']))
    {
        $build_id = $_POST['build_id'];
        $cpu = $_POST['cpu'];
        $mother = $_POST['motherboard'];
        $name = $_POST['name'];
        $querycart =" INSERT INTO `cart`( `item_name`) VALUES ( '$build_id' ,$name')";
        $runcart = mysqli_query($conn,$querycart);
        ?>
        <script>
        alert('succ added to cart');
        </script> 
    <?php  
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
select{
    width: 100%;
    border: 1px solid black;
    box-shadow: 1px 1px 2px 1px grey;
    padding: 10px 15px 10px 15px;
}

</style>