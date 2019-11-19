<?php

$processor=$_GET['processor'];
$c1=array('Intel i7 8th gen','Intel i5 8th gen','Intel i7 7th gen','Intel i5 7th gen');
$c2=array('Ryzen 7 7700X','Ryzen 5 3600X','Ryzen 5 7000','Ryzen 3 5000');


if ($processor == "Intel")
{
    foreach($c1 as $c)
        echo"<br><option>$c</option>" ;
}
elseif ($processor == "AMD")
{
    foreach($c2 as $c)
    echo"<option>$c</option>";
}

else
{
    echo"<option>First select cpu</option>";
}
?>

