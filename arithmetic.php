
<!DOCTYPE html>
<html>
<head>
	<title>GFG</title>
</head>

<body><center>
	<h1>
		ARITHMETIC OPERATIONS
	</h1>

	<h3>Option-1 = Addition</h3>
	<h3>Option-2 = Subtraction</h3>
	<h3>Option-3 = Multiplication</h3>
	<h3>Option-4 = Division</h3>
	
	<form method="post">
		<table border="0">
			<tr>
				
				<td> <input type="text" name="num1"
					value="" placeholder="Enter value 1"/>
				</td>
			</tr>

			<tr>
			
			<td> <input type="text" name="num2" value=""
					placeholder="Enter value 2"/>
				</td>
			</tr>

			<tr>
				
				<td> <input type="text" name="option" value=""
					placeholder="Enter option 1-4 only"/>
				</td>
			</tr>

			<tr>
				<td> <input type="submit" name="submit"
					value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
</center>

<?php


if(isset($_POST['submit'])) {

	
	$a = $_POST['num1'];

	
	$b = $_POST['num2'];

	
	$ch = $_POST['option'];

	switch($ch) {
		case 1:

			
			$r = $a + $b;
			echo " Addition of two numbers = " . $r ;
			break;

		case 2:

			$r = $a - $b;
			echo " Subtraction of two numbers= " . $r ;
			break;

		case 3:

			$r = $a * $b;
			echo " Multiplication of two numbers = " . $r ;
			break;

		case 4:

		
			$r = $a / $b;
			echo " Divison of two numbers = " . $r ;
			break;

		default:

			echo ("invalid option\n");
	}
	
	return 0;
}
?>
</body>
</html>
