
<?php
$conn = mysqli_connect("localhost","root","","custom");
if ($conn == false)
{	echo "no connection";}
else {	echo "successfully connected";}
?>
<html>
<body>
    <form name="login" action="login.php" onsubmit="return Register()"> 
            <h1 id="">CREATE A NEW ACCOUNT</h1>
            <p>Please fill in this form.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter your Name" name="name" required>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <hr>
            <label for="phone"><b>Phone number</b></label>
            <input type="number" placeholder="Enter phone number" name="phone"required >
            <hr>
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            
            <div>
            <input type="submit" value="Submit" name="submit"></a>
            </div>
    </form>
          
        </body>
</html>
<?php

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];

$query="INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES ('$name',$email','$phone','$pass')";
$run = mysqli_query($conn,$query);
if ($run==TRUE)
{
    echo " Welcome" .Srun['name'] ;
    echo "You have been successfully Registered";
}
else{
    echo "not submitted";
}
?>