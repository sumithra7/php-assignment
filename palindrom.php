
<html>
<head>
<style>
p
{
	font-size:20;
	font-weight:bold;
}
button
{
	width:70px;
	height:30px;
	color:white;
	background-color:darkblue;
	border-color:white;
}	
</style>
<body>
<center>
<form method="post">    
<br>    
<p>Enter a Number: </p><input type="text" name="num" required placeholder="Enter a number"/><br> <br> 
<button type="submit" name="submit">Check</button>  
</form>  
<?php   
	$a=0;
	$s=0;
	$rev=0;
    if(isset($_POST['submit']) ) 
    {  
       
        $num = $_POST['num'];  
        
        $reverse = strrev($num);  
          
         
        if($num == $reverse){  
            echo "The number $num is Palindrome";     
        }else{  
            echo "The number $num is not a Palindrome";   
        } 
      
while($num>1)
{
	$a=$num%10;
	$s=$s+$a;
//$rev=($rev*10)+$a;
	$num=$num/10;
}
echo"<br>Sum=".$s;
echo"<br>Reverse=".$reverse; 
}     
      ?>
</center>
</body>
</html>  