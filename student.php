<html>
<body style="background-color:#ffe6f2">
<form method="post"  enctype="multipart/form-data" action="student.php">
<table border="1"> <b>Registration Form</b>
<tr>
<td>
Student's Photo:
</td>
<td colspan="3">
<input type="file" name="pic">
</td>
</tr>
<tr>
<td colspan="2">
First Name:
<input type="text" name="fname" required>
</td>
<td>
Middle Name:
<input type="text" name="mname" required>

Last Name:
<input type="text" name="lname" required>
</td>
</tr>
<tr>
<td>
Father's Name:
</td>
<td colspan="3">
<input type="text" name="father" required>
</td>
</tr>
<tr>
<td>
Address
</td>
<td colspan="3">
<input type="text" name="address" required>
</td>
</tr>
<tr>
<td>
Mobile number:
</td>
<td colspan="3">
<input type="number" name="mbl" maxlength="10" required>
</td></tr>
<tr>
<td>
E-mail:
</td>
<td colspan="3">
<input type="email" name="mail" required>
</td></tr>
<tr>
<td>
DOB:
</td>
<td colspan="3">
<input type="date" name="dob" required min="1985-01-01" max="2099-12-31">
</td></tr>
<tr>
<td>
Gender:
</td>
<td colspan="3">
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="fmale">Female
</td></tr>
<tr>
<td>
Hobbies:
</td>
<td colspan="3">
<input type="checkbox"  name="h1" value="Cooking">Cooking
<input type="checkbox"  name="h2" value="Dancing">Dancing
<input type="checkbox"  name="h3" value="Singing">Singing
<input type="checkbox"  name="h4" value="Gardening">Gardening
<input type="checkbox"  name="h5" value="Drawing">Drawing
</td></tr>

<tr>
<td>
College:
</td>
<td colspan="3">
<input type="text" name="clg" required>
</td></tr>
<tr>
<td>
Course Studied:
</td>
<td colspan="3">
<input type="radio" name="course" value="B.E">B.E
<input type="radio" name="course" value="B.Com">B.Com
<input type="radio" name="course" value="BSc">BSc
<input type="radio" name="course" value="BCA">BCA
<input type="radio" name="course" value="BA">BA
</td></tr>
<tr>
<td>
Percentage:
</td>
<td colspan="3">
<input type="number" name="per" required>
</td></tr>
<tr><td>
Select Course:
</td>
<td colspan="3">
<select name="course2" required>
<option >Select</option>
<option >M.tech</option>
<option >MCA</option>
<option>MBA</option>
<option >MSc</option>
</select>
</td></tr>
<tr><td colspan="4"><center>
<input type="reset" Value="Reset">
<input type="submit" Value="Submit" name ="submit"></center>
</td>
</tr>
</table>
</form>

<?php
$fname="";
$mname="";
$lname="";
$father="";
$address="";
$mobile="";
$dob="";
$gender="";
$hobbies=array();
$clg="";
$course="";
$per="";
$course2="";
$email="";
$hobbies1="";
if(isset($_POST['submit']))
{
$pg_course;

$marks=$_POST['per'];
if(!isset($_POST['gender']))
{
	exit( "Please select gender");
}
	$pg_course=$_POST['course2'];

$ug_course=$_POST['course'];
if(empty($_POST['h1'])&& empty($_POST['h2'])&& empty($_POST['h3'])&& empty($_POST['h4'])&& empty($_POST['h5']))
{
	exit("Please choose youre hobbies");
	
}
if(($pg_course=="MCA" || $pg_course=="M.tech") && $marks<70)
{
	exit("Percentage must be greater than 70");
}

else if(($pg_course=="MBA")&& $marks<60)
{
	exit( "Percentage must be greater than 60");
}
else
{	
	if($marks<40)
	{
		exit("Percentage must be greater than 40");
	}
}

if($ug_course=="B.E" && $pg_course=="M.tech")
{
	echo"You are eligible";
}
else if(($ug_course=="BSc" || $ug_course=="BCA") && $pg_course=="MSc" )
{
	echo"You are eligible";
}
else if(($ug_course=="BSc" || $ug_course=="BCA") &&$pg_course=="MCA" )
{
	echo "You are eligible";
}
else if(($ug_course=="BSc" || $ug_course=="BCA" ||$ug_course=="B.Com" || $ug_course=="BA")&& $pg_course=="MBA")
{
	echo "You are eligible";
}
else
	exit("You are not eligible");


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$father=$_POST['father'];
$address=$_POST['address'];
$mobile=$_POST['mbl'];
$email=$_POST['mail'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

if(!empty($_POST['h1']))
{
	array_push($hobbies,$_POST['h1']);
}
if(!empty($_POST['h2']))
{
	array_push($hobbies,$_POST['h2']);
}

if(!empty($_POST['h3']))
{
	array_push($hobbies,$_POST['h3']);
}

if(!empty($_POST['h4']))
{
	array_push($hobbies,$_POST['h4']);
}
if(!empty($_POST['h5']))
{
	array_push($hobbies,$_POST['h5']);
}


$clg=$_POST['clg'];
$course=$_POST['course'];
$per=$_POST['per'];
$course2=$_POST['course2'];
$hobbies1=implode(" ",$hobbies);


echo "<center>";
echo"<h2 style='text-decoration:underline;'>Student Information</h2>";
echo "<table border='2'>
       <tr>
	   <td>Student photo</td>
	   <td>";
	   $filepath="image/" .$_FILES["pic"]["name"];
 	  if(move_uploaded_file($_FILES["pic"]["tmp_name"],$filepath))
	  {
		echo"<img src=".$filepath." height=200 width=300/>";
	  }
	  else
	  {
		  echo "Error!!";
	  }echo"</td></tr>
      <tr>
	<td>First Name</td>
	<td> $fname</td>
      </tr>
      <tr>
	<td>Middle Name</td>
	<td> $mname</td>
      </tr>
<tr>
	<td>Last Name</td>
	<td> $lname</td>
      </tr>
<tr>
	<td>Father's Name</td>
	<td>$father</td>
      </tr>
<tr>
	<td>Address</td>
	<td>$address</td>
      </tr>

<tr>
	<td>Mobile</td>
	<td> $mobile</td>
      </tr>
<tr>
	<td>E-Mail</td>
	<td> $email</td>
      </tr>
<tr>
	<td>DOB</td>
	<td> $dob</td>
      </tr>
<tr>
	<td>Hobbies</td>
	
	<td>$hobbies1
</td>
      </tr>
<tr>
	<td>College</td>
	<td> $clg</td>
      </tr>
<tr>
	<td>Course Studied</td>
	<td>$course</td>
      </tr>
<tr>
	<td>Percentage</td>
	<td>$per</td>
      </tr>
<tr>
	<td>Selected Course</td>
	<td> $course2</td>
    </tr>
</table>
</center>";
	}

?>









</body>

</html>
