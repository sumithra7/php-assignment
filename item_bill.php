<!DOCTYPE html>
<html>
<head>
	<title>Program 12</title>
<style>
div
{
	background-color:darkblue;
}
h1,h4
{
	color:white;
}
</style>
</head>
<body>
<div>
<h1>A-Mart</h1>
<h4>(Welcome to A-Mart Online Shopping)</h4>
<br>
</div>
<hr>
<form method="post">
<h2>Please select your item:</h2>
<select name="item" required>
<option>Select</option> 
<option value="Pencil">Pencil</option> 
<option value="Pen">Pen</option> 
<option value="Book">Book</option> 
<option value="Eraser">Eraser</option> 
<option value="Pouch">Pouch</option> 
</select>
<input type="submit" name="go" value="Go">
</form>
<?php

$st_no=0;
$iname="";
$price=0.0;
$icode="";
$qty=0;
$total=0;
if(isset($_POST['go']))
{

$itemname=$_POST['item'];
switch($itemname)
{
	case 'Pencil':
		$st_no=1;
		$iname="Pencil";
		$price=5;
		$icode=1002;
	break;
	case 'Pen':
		 $st_no=2;
		 $iname="Pen";
		 $price=20;
		 $icode=1003;
	break;
	case 'Book':
		 $st_no=3;
		 $iname="Book";
		 $price=40;
		 $icode=1004;
	break;
	case 'Eraser':
		 $st_no=4;
		 $iname="Eraser";
		 $price=4;
		 $icode=1005;
	break;
	case 'Pouch':
		 $st_no=5;
		 $iname="Pouch";
		 $price=30;
		 $icode=1006;
	break;
	deafult:
		echo"Invalid!!!";
}
}
?>

<?php		


if(isset($_POST['submit']))
{ 

$iname=$_POST['iname'];
$price=$_POST['price'];
$icode=$_POST['icode'];
$qty=$_POST['qty']; 

$total=$price*$qty;


}

?>
<form method="post">
<table border="1">
<tr>
	<th>Description</th>
	<th>Values</th>
</tr>
<tr>
	<td>ST.NO</td>
	<td><input type="number" name="st_no" readonly value="<?php echo $st_no; ?>"></td>
</tr>
<tr>
	<td>Item name</td>
	<td><input type="text" name="iname" readonly value="<?php echo $iname; ?>"></td>
</tr>
<tr>
	<td>Price</td>
	<td><input type="number" name="price" readonly value="<?php echo $price; ?>"></td>
</tr>
<tr>
	<td>Item Code</td>
	<td><input type="number" name="icode" readonly value="<?php echo $icode; ?>"></td>
</tr>
<tr>
	<td>Quantity</td>
	<td><input type="number" name="qty" required></td>
</tr>
</table>
<input type="submit" name="submit" value="Bill">
</form>

<h2>A-Mart Stationary Pvt.Ltd.</h2>
<table border="1">
      <tr>
	<th colspan="6">A-Mart Reciept Bill</th>
      </tr>
      <tr>
	<th>Item Name</th>
	<th>Price</th>
	<th>Item Code</th>
	<th>Quantity</th>
	<th>Date </th>
	<th>Total Amount</th>
       </tr>
       <tr>
	  <td><?php echo $iname; ?></td>
       
	  <td><?php echo $price; ?></td>
       
	  <td><?php echo $icode; ?></td>
       
	  <td><?php echo $qty; ?></td>
      
		<td><?php echo date("d/m/Y"); ?></td>
	
	  <td><?php echo $total; ?></td>
       </tr>
</table>
</body>
</html>