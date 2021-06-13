


<!DOCTYPE html>

<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>



<body>
	<div id="page-wrap">
		<h1>Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
		Enter previous reading:
            	<input type="number" name="units" id="units" placeholder="Please enter previous reading" /><br><br>
		Enter current reading:
            	<input type="number" name="units2"  placeholder="Please enter Current reading" /><br><br>
            	<input type="submit" name="submit"  value="Submit" />
		</form>

	</div>
<?php
if(isset($_POST['submit']))
{
	$p_read=$_POST['units'];
	$c_read=$_POST['units2'];
	$amt;
	if($p_read>$c_read)
	{
		echo "Previous reading must be less than current reading";
	}
	else
	{
		$units=$c_read-$p_read;
		if($units<100)
			$amt=$units*3;
		else if($units>=100&&$units<200)
			$amt=$units*4;
		else if($units>=200&&$units<300)
			$amt=$units*5;
		else
			$amt=$units*6;
		echo "Electricity bill Rs".$amt;

	}
}
?>
</body>
</html>
