
<html>
<center>	
<h1 align:center>Please select something</h1><br>


<?php
$educationArr=array('1','2','3','4','5');
$arr=array();
if(isset($_POST['submit']))
{
	$arr=$_POST['ed'];
	echo implode(" , ",$arr);
	echo "<br/><br/>";
}
?>
<form method="post">
	<?php foreach($educationArr as $list){?>
		<?php if(in_array($list,$arr))
		{
			?>
			<?php echo $list?> <input checked="checked" type="checkbox" name="ed[]" value="<?php echo $list?>"/><br/><?php
		}
		else{
			?>
			<?php echo $list?> <input type="checkbox" name="ed[]" value="<?php echo $list?>"/><br/><?php
		}
		?>
	<?php } ?>
	<br/><br/>
	<input type="submit" name="submit"/>
</form>
</center>
</html>