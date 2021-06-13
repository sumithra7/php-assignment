<!DOCTYPE html>
<html>
<head>
	<title>Program 13</title>
<style>
.submit
{
	background-color:darkgreen;
	color:white;
	width:80px;
	height:30px;
	font-family:verdana;
}p
{
	font-size:large;
	font-weight:bold;
}
</style>
</head>
<body>
<form method="post">
<center>
<div>
	<p>Please enter a number to calculate the factorial:</p>
	<input type="number" name="num" placeholder="Enter a number" required><br><br>
	<input type="submit" name="submit" value="Check" class="submit">
	
	
</div>
</center>
<p>Factorial is:</p>
</form>
<?php
if(isset($_POST['num']))
{
  function fact($num)
  {
	$res=1;
	for($i=$num;$i>=1;$i--)
	{
		$res=$res*$i;
	}
	return $res;

		
  }
  $num=$_POST['num'];
  $a=fact($num);
  echo $a;

  
}?>
</body>
</html>