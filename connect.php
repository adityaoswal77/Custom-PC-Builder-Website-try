<?php
$conn = mysqli_connect("localhost","root","","demo");
if ($conn == false)
{
	echo "no connection";
}
else {
	echo "successfully connected";
}
?>