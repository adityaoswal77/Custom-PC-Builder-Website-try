<html>
<head>
<title>Fetch</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">ADMIN Page</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:40px;height:45px"><a href="insert.php">INSERT A NEW ITEM</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="fetch.php"> DELETE </a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="update.php"> UPDATE </a></li>

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
            <th>company</th>
            <th>product</th>
            <th>Specifications</th>
            <th>Price</th>
            <th>Item Type</th>
            <th>Action</th>
        </tr>

   
<?php
$conn = mysqli_connect("localhost","root","","custom");
if(isset($_POST['delete']))
{
    $delete = $_POST['item_id'];
    $query_delete = "DELETE FROM `item` WHERE `item_id`='$delete'";
    $dato=mysqli_query($conn,$query_delete);
    $totol=mysqli_num_rows($dato);
    echo $query_delete;

}

?>
<?php
$conn = mysqli_connect("localhost","root","","custom");
$query = "SELECT `item_id`,`item_company`, `item_name`, `item_info`, `item_price`,`item_type` FROM `item`";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{

		echo "<tr><td>". $result['item_company'] ."</td><td>". $result['item_name']. "</td><td> " .$result['item_info']. "</td><td>" .$result['item_price']. "</td><td>" .$result['item_type']. "</td><td>" .'<input type="button" value="delete id="delete" >'. "</td></tr>";
         ?>
         <form action="fetch.php" method="POST">
        <input type="hidden" value= "<?php  echo $result['item_id'] ?>"  name="delete">
        </form>
           <?php    
//echo "||";
    }
    
//	echo "table has records";
}
?>
    </table>
</body>
</center>
</html>
