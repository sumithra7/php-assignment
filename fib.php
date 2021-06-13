<html>
<body>
<form method="post">
Enter a number
<input type="number" name="number">
<input type="submit" value="Submit" name="submit"></form>



<?php  
 if(isset($_POST['submit']))
{
$num = $_POST['number'];
$s; 
$arr=array(); 
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  

function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
 
for ($i = 0; $i < $num; $i++){  

$s=series($i);
echo "$s<br>";
$arr[$i]=$s;
   
}  
function prime($x)
{

for($n=2;$n<$x;$n++)
{
	
	if($x%$n==0)
	{
		return 0;
	}
}
return 1;
}

echo "Prime numbers are<br>";
for($i=3;$i<count($arr);$i++)
{
	$c=$arr[$i];
	$b=prime($c);
	if($b==1)
	echo $c."<br>";
}

}
?>
</body>
</html>


