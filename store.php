<!DOCTYPE html>
<html>
<head>
	<title>Program 11</title>
</head>
<body>
<form method="post">
<table border="1">
<th colspan="2">Item Store</th>
<tr>
	<td>Enter item names</td>
	<td><input type="text" name="item" required placeholder="Enter item names"></td>
</tr>

<tr>
	<td>Enter item price</td>
	<td><input type="text" name="price"required placeholder="Enter price"></td>
</tr>

<tr>
	<td colspan="2"><input type="submit" name="submit" value="Store">
	<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>

<?php
$sum=0;
if(isset($_POST['submit']))
{
	
$item=$_POST['item'];
$price=$_POST['price'];

$iname=explode(',',$item);
$x=count($iname);
$prc=explode(',',$price);

echo "<body><table>
	<tr>
	<th>Items </th>
	<th>Price</th>
	</tr>";
for($i=0;$i<$x;$i++)
{
	echo"<tr>";
	echo"<td>{$iname[$i]}</td><td>{$prc[$i]}</td>";
}
echo"</tr>";
echo"</table>";
echo"<br>";
for($i=0;$i<$x;$i++)
{
	$sum+=$prc[$i];
}

echo "Costliest item is ".max($prc)."<br>";
echo "Cheapest item is ".min($prc)."<br>";
echo "Total: ".$sum;
}
?>
</body>
</html>





