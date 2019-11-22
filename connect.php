<?php
$conn = mysqli_connect("localhost","root","","custom");
if ($conn == false)
{
	echo "no connection";
}
else {
	echo "successfully connected";
}
?>