


<html> 
<head>
	<title>Program 4</title>
<style>
div
{
	border-width:2px;
	border-style:solid;
	border-color:black;
	margin-left:30%;
	margin-right:30%;
}
.submit
{
	font-family:serif;
	color:white;
	background-color:green;
	font-size:16px;
	width:100;
	height:40;
}
</style> 
</head>
<body>  
<div>
 <form method="post"> 
<br> 
 Enter the Number:  
   <input type="number" name="number" required placeholder="Enter a number">  <br><br>
  <center> <input type="submit" value="Submit"  name="submit" class="submit"></center>  
  </form>  
 
<?php  
 if(isset($_POST['submit']))  
 {   
  
  $number = $_POST['number'];  

  $a = $number;  
  $sum  = 0;  

  while( $a != 0 )  
  {  
   $rem   = $a % 10; 
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $a   = $a / 10; 
  }  
  
  if( $number == $sum )  
  {  
   echo "Yes $number an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
 }  
?>    
  
</div>
</body>  
</html>  




