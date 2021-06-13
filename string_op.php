<!DOCTYPE html>
<html>
<body>
<center>

<h1>String Operations</h1>
<form method="post">
<h2>Enter a string</h2>
<input type="text" name="str" placeholder="Enter a string" required>
<h3>1.Reversing the string</h3>
<h3>2.Length of the string</h3>
<h3>3.Substring</h3>
<h3>4.Convert to Uppercase</h3>
<h3>5.Convert to Lowercase</h3>
<h3>6.Count the Number of words.</h3>
Enter your choice:
<input type="number" name="num" required placeholder="Enter your choice"><br><br>
<input type="submit" value="Check" name="submit">
</form>
</center>


<?php
if(isset($_POST['submit']))
{
$str1=$_POST['str'];
$ch=$_POST['num'];

switch($ch)
{
	case 1:
		echo "Reversed string is: ";
		echo strrev($str1);
		
		break;
	case 2:
		echo " String length: ";
		echo strlen($str1);
		break;
	case 3:
		echo "Substring of ".$str1." is: ";
		echo substr($str1,7);
		echo "<br>";
		echo substr($str1,3,6);
		break;
	case 4:
		echo "Upper Case: ";
		echo strtoupper($str1);
		break;
	case 5:	
		echo "Lower Case: ";
		echo strtolower($str1);
		break;
	case 6:
		echo "No.of words: ";
		echo str_word_count($str1);
		break;
	default:
		echo "Invalid!!!";
}
return 0;

}
?>
	</body>
</html>	