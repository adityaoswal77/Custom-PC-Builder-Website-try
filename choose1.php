<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<title>Fetch</title>
</head>
<body>
<center>
    <div class="row">
            <h1 style="color:skyblue;border:1px solid black">CART Page</h1> <br>
    </div>
            <div class="topnav">
    
<hr>
<ul>
    <li style="background-color:blue; border-radius:40px;height:45px"><a href="insert.php">Home</a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="logout.php"> LOGOUT </a></li>
    <li style="background-color:chocolate; border-radius:40px; height:25px"><a href="update.php"> CHECKOUT </a></li>

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
    border:1px solid black;
    border-width:3px;
    border-color:#3f3f3f; 
    padding:10px; 
}
</style>

<?php
$conn = mysqli_connect("localhost","root","","custom");
$query = "SELECT `item_company`, `item_name`, `item_info`, `item_price` FROM `item`";
$data =mysqli_query($conn,$query);
$num = mysqli_num_rows($data);
//echo $total; 
if($num > 0 )
    {
            while($item=mysqli_fetch_assoc($data))
	        {
                ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase"> 
                    <?php echo $item['item_company'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo $item['item_name'];  ?> ">

					 <h6> <?php echo $item['item_info'];  ?><span> (<?php echo $item['item_price'];  ?>Rupees) </span> </h6> 

					 <h6 class="badge badge-success"> 5.0 <i class="fa fa-star"> </i> </h6>

					 <input type="text" name="" class="form-control" placeholder="Quantity">

					</div>
					<div class="btn-group d-flex">
						<button class="btn btn-success flex-fill"> Add to cart </button> <button class="btn btn-warning flex-fill text-white"> Buy Now </button>
					</div>


				</div>
			</form>                      
        </div>

            <?php
            }
    }
?>
</body>
</center>
</html>
