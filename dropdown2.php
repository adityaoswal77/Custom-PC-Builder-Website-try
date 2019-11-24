
<link rel="stylesheet" href="style.css">

<?php
$mysqli = mysqli_connect('localhost','root','','custom');
?>
<?php
$resultSet = $mysqli->query("SELECT item_name FROM item where item_type = 'cpu'");

?> 
<div class = "container" align="center">
<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">THE CUSTOM PC BUILDER</h1> <br>
    </div>
            
		<div class="topnav">
			<hr>
				<ul>
					<li style="background-color:blue; border-radius:40px;height:45px"><a href="home.php">Home</a></li>
					<li style="background-color:chocolate; border-radius:40px; height:25px"><a href="./logout.php"> Logout </a></li>
					<li style="background-color:chocolate;border-radius:20px; height:50px"><a href="./cart.php"> cart</a></li>
				</ul>      
			<hr>      

		</div>


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
	font-color : white;
    border:1px solid black;
    border-width:3px;
    border-color:#3f3f3f; 
    padding:10px; 
}
</style>

    <table>
        <tr>
            <th>company</th>
            <th>product</th>
            <th>Specifications</th>
            <th>Price</th>
        </tr>
<?php
$conn = mysqli_connect("localhost","root","","custom");

$query = "SELECT `item_company`, `item_name`, `item_info`, `item_price`, `item_type` FROM `item` WHERE `item_type` = 'cpu'";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr><td>". $result['item_company'] ."</td><td>". $result['item_name']. "</td><td> " .$result['item_info']. "</td><td>" .$result['item_price']. "</td></tr>";

	}
	//echo "table has records";
}
else
{}
?>
    </table>


<form align='center' action="dropdown2.php" method="POST">

<h1>Choose Your Processor </h1>
  <select name = "item_cpu"  style = 'background:blue; width = 50px;'>
     <?php
	  while($rows= $resultSet->fetch_assoc())
		{$item_name = $rows['item_name'];
			echo "<option value='$item_name'>$item_name </option>";
			}
		?>
 </select>
 <?php
$resultSet = $mysqli->query("SELECT item_name FROM item where item_type = 'gpu'");

?>
 <table>
        <tr>
            <th>company</th>
            <th>product</th>
            <th>Specifications</th>
            <th>Price</th>
        </tr>
<?php
$conn = mysqli_connect("localhost","root","","custom");

$query = "SELECT `item_company`, `item_name`, `item_info`, `item_price`, `item_type` FROM `item` WHERE `item_type` = 'gpu'";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr><td>". $result['item_company'] ."</td><td>". $result['item_name']. "</td><td> " .$result['item_info']. "</td><td>" .$result['item_price']. "</td></tr>";
  
	}
	//echo "table has records";
}
else
{}
?>
    </table>



 <h1>Choose your Graphics Card </h1>
  <select name = "item_gpu"  style = 'background:lightblue; width = 50px;'>
     <?php
	  while($rows= $resultSet->fetch_assoc())
		{$item_name = $rows['item_name'];
			echo "<option value='$item_name'>$item_name </option>";
			}
		?>
 </select>
 
 
  <?php
$resultSet = $mysqli->query("SELECT item_name FROM item where item_type = 'ram'");

?>
 <table>
        <tr>
            <th>company</th>
            <th>product</th>
            <th>Specifications</th>
            <th>Price</th>
        </tr>
<?php
$conn = mysqli_connect("localhost","root","","custom");

$query = "SELECT `item_company`, `item_name`, `item_info`, `item_price`, `item_type` FROM `item` WHERE `item_type` = 'ram'";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr><td>". $result['item_company'] ."</td><td>". $result['item_name']. "</td><td> " .$result['item_info']. "</td><td>" .$result['item_price']. "</td></tr>";
  
	}
	//echo "table has records";
}
else
{}
?>
    </table>



 <h1>Choose your RAM</h1>
  <select name = "item_ram"  style = 'background:blue; width = 50px;'>
     <?php
	  while($rows= $resultSet->fetch_assoc())
		{$item_name = $rows['item_name'];
			echo "<option value='$item_name'>$item_name </option>";
			}
		?>
 </select>
 
 
  <?php
$resultSet = $mysqli->query("SELECT item_name FROM item where item_type = 'ssd'");

?>
 <table>
        <tr>
            <th>company</th>
            <th>product</th>
            <th>Specifications</th>
            <th>Price</th>
        </tr>
<?php
$conn = mysqli_connect("localhost","root","","custom");

$query = "SELECT `item_company`, `item_name`, `item_info`, `item_price`, `item_type` FROM `item` WHERE `item_type` = 'ssd'";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr><td>". $result['item_company'] ."</td><td>". $result['item_name']. "</td><td> " .$result['item_info']. "</td><td>" .$result['item_price']. "</td></tr>";
	}
	//echo "table has records";
}
else
{}
?>
    </table>
</center>


 <h1>Choose your SSD</h1>
  <select name = "item_ssd"  style = 'background:lightblue; width = 50px;'>
     <?php
	  while($rows= $resultSet->fetch_assoc())
		{$item_name = $rows['item_name'];
			echo "<option value='$item_name'>$item_name </option>";
			}
		?>
 </select>
 <div>
        <input type="submit" value="Submit" name="order" class="select">
    </div>


 <?php
$conn = mysqli_connect("localhost","root","","custom");



if(isset($_POST['order']))
    {
		$cpu = $_POST['item_cpu'];
		$gpu = $_POST['item_gpu'];
		$ram = $_POST['item_ram'];
		$ssd = $_POST['item_ssd'];			

        $query="INSERT INTO `cart`(`cart_cpu`,`cart_gpu`,`cart_ram`,`cart_ssd`) VALUES('$cpu','$gpu','$ram','$ssd')";
		
		echo $query;
		$runcart = mysqli_query($conn,$query);
        ?>
        <script>
        alert('succ added to cart');
        </script> 
    <?php  
    }

?>
</div>
 </form>
 <style> 
            select { 
                appearance: none; 
                outline: 0; 
                background: green; 
                background-image: none; 
                width: 20%; 
                height: 5%; 
                color: black; 
                cursor: pointer; 
                border:1px solid black; 
                border-radius:3px; 
            } 
            .select { 
                position: relative; 
                display: block; 
                width: 15em; 
                height: 2em; 
                line-height: 3; 
                overflow: hidden; 
                border-radius: .25em; 
                padding-bottom:10px; 
                  
            } 
            h1 { 
                color:green; 
            } 

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


