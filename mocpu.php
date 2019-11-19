<?php

$motherboard=$_GET['motherboard'];
$c1=array('Intel Processor','AMD Processor');
$c2=array('AMD Processor','Intel Processor');


if ($motherboard == "Msi")
{
    foreach($c1 as $c)
        echo"<br><option>$c</option>" ;
}
elseif ($motherboard == "Gigabyte")
{
    foreach($c2 as $c)
    echo"<option>$c</option>";
}

else
    echo"<option>First elect state</option>";

?>

