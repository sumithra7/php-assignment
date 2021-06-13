<!DOCTYPE html>
<html>
<head>

	<title>Program 9</title>
<style>


</style>
</head>
<body>
<form method="post" action="employee.php" enctype="multipart/form-data">
<center>
<div>
<h2>Fill Employee Information</h2>
<table border="1">
<tr> 
	<td>Employee Photo</td>
	<td><input type="file" name="file" requied></td>
</tr>
<tr> 
	<td>Employee Number</td>
	<td><input type="text" name="eno" required></td>
</tr>
<tr> 
	<td>First Name</td>
	<td><input type="text" name="efname" required></td>
</tr>
<tr> 
	<td>Last Name</td>
	<td><input type="text" name="elname" required></td>
</tr>
<tr> 
	<td>Address</td>
	<td><input type="text" name="address" required></td>
</tr>
<tr> 
	<td>Gender</td>
	<td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>
</tr>
<tr> 
	<td>Designation</td>
	<td><input type="text" name="design" required></td>
</tr>
<tr> 
	<td>Mobile</td>
	<td><input type="number" name="mobile" required></td>
</tr>
<tr> 
	<td>Category</td>
	<td><select name="cat" required>
	<option>Select</option>
	<option>Part time</option>
	<option>Full Time</option>
	<option>Contract</option>
	</select></td>
</tr>
<tr> 
	<td>No.of Hours</td>
	<td><input type="number" name="hours" ></td>
</tr>
<tr> 
	<td>Basic Salary</td>
	<td><input type="number" name="sal">
</tr>
<tr> 
	<td colspan="2"><input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Reset"</td>
	
</tr>
</table>
</div>
</center></form>
<hr>

<?php
$efname="";
$elname="";
$eno="";
$address="";
$design="";
$mobile="";
$hours=0;
$sal=0;
$da=0.0;
$hra=0.0;
$tax=0;
$net=0.0;
$gross=0.0;
$pf=0;
if(isset($_POST['submit']))
{
  
 if($_POST['cat']=="Select")
 {
	echo '<script>alert("Please select Employee category")</script>';
 }
 
 if( (($_POST['cat']=="Full time") || ($_POST['cat']=="Contract"))&&($_POST['hours']>0))
 {
	echo '<script>alert("Only for Part timers")</script>';
 }
 if(!isset($_POST['gender']))
 {
	echo '<script>alert("Please enter gender")</script>';
 }
 	$fname=$_POST['efname'];
	$lname=$_POST['elname'];
	$eno=$_POST['eno'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$design=$_POST['design'];
	$mobile=$_POST['mobile'];
	$cat=$_POST['cat'];
	$hours=$_POST['hours'];
	$basic=$_POST['sal'];
if($_POST['cat']=="Part time")
{
	$sal=$_POST['hours']*100;
	$gross=$da+$hra+$_POST['sal'];
	$net=$gross-$pf-$tax+$sal;

}
else
{
	
  if($_POST['cat']=="Full time")
  {
	if($_POST['sal']<10000)
	{
		$da=0.45*$_POST['sal'];
		$hra=0.1*$_POST['sal'];
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
	else if($_POST['sal']>=10000 & $_POST['sal']<50000)
	{
		$da=0.75*$_POST['sal'];
		$hra=0.2*$_POST['sal'];
		$pf=1200;
		$tax=0.05*$_POST['sal'];
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
	else 
	{
		$da=0.9*$_POST['sal'];
		$hra=0.3*$_POST['sal'];
		$pf=0.05*$_POST['sal'];
		$tax=0.15*$_POST['sal'];
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
   }
   else
   {
	if($_POST['sal']<5000)
	{
		$da=200+$_POST['sal'];
		$hra=0.0;
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
	else if($_POST['sal']>=5000 & $_POST['sal']<25000)
	{
		$da=0.15*$_POST['sal'];
		$hra=1000+$_POST['sal'];
		
		$tax=0.03*$_POST['sal'];
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
	else 
	{
		$da=0.2*$_POST['sal'];
		$hra=0.05*$_POST['sal'];
		
		$tax=0.09*$_POST['sal'];
		$gross=$da+$hra+$_POST['sal'];
		$net=$gross-$pf-$tax;
	}
    }
}
echo"<table border='2'>
    <tr>
    <th colspan='2'>Employee Details</th>
    </tr>
    <tr>
  	  <td>Employee photo</td>
          <td>";
          $filepath="upload/" .$_FILES["file"]["name"];
 	  if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
	  {
		echo"<img src=".$filepath." height=200 width=300/>";
	  }
	  else
	  {
		  echo "Error!!";
	  }echo"</td>";
	  echo"</tr>
		 <tr>
		<td>Employee number</td><td> $eno </td>
		</tr>
		<tr>
		<td>First name</td><td>$fname</td>
		</tr>
		<tr>
		<td>Last name</td><td>$lname</td>
		</tr>
		<td>Address</td><td>$address</td>
		</tr>
		<tr>
		<td>Gender</td><td>$gender</td>
		</tr>
		<tr>
		<td>Designation</td><td>$design</td>
		</tr>
		<tr>
		<td>Mobile</td><td>$mobile</td>
		</tr>
		<tr>
		<td>Category</td><td>$cat</td>
		</tr>
		<tr>
		<td>No.of hours</td><td>$hours</td>
		</tr>
		<tr>
		<td>Basic salary</td><td>$basic</td>
		</tr>
		<tr>
		<td>DA</td><td>$da</td>
		</tr>
		<tr>
		<td>HRA</td><td>$hra</td>
		</tr>
		<tr>
		<td>PF</td><td>$pf</td>
		</tr>
		<tr>
		<td>Tax</td><td>$tax</td>
		</tr>
		<tr>
		<td>Gross salary</td><td>$gross</td>
		</tr>
		<tr>
		<td>Net Salary</td><td>$net</td>
		</tr>
		</table>";

  	  
    
     
}
		
		
?>
</body>
</html>