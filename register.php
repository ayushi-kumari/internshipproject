<?php
$servername="localhost";
$username ="root";
$password="";
$database="college";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("connection failed:".mysql_error());
}
?>
<!doctype html
<html>
<body>
<center>
<form method ="post" action="register.php">
  first name:<br>
  <input type="text" name ="firstname" placeholder="enter  first name" value="" required>
  <br>
  last name:<br>
  <input type ="text" name="lastname" placeholder="enter last name "value ="" required><br>
  city name: <br>
  <input type ="text" name="cityname" placeholder="enter city name "value ="" required><br>
  gender:<br>
 <input type="radio" name="gender" value ="male" >male<br>
 <input type="radio" name ="gender" value ="female" >female<br>
 email id:<br>
 <input type="email" name ="email"  placeholder=" enter email "value ="" required><br><br>
 education:<br>
 <input type="checkbox" name="education[]"value="php">php<br>
 <input type="checkbox" name="education[]"value="css">css<br>
 <input type="checkbox" name="education[]"value="html">html<br>
 <input type="checkbox" name="education[]"value="java">java<br>

 <input type="submit" name ="save" value=" submit">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['save']))
{
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$cityname= $_POST['cityname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$education=$_POST['education'];
	$chk="";
	foreach($education as $chk1)
	{
		$chk.= $chk1.",";
	}
	$sql =" INSERT INTO course(firstname,lastname,cityname,gender,email,education)values('$firstname','$lastname','$cityname','$email','$gender','$chk')";
	if(mysqli_query($conn,$sql)){
		echo "new record created successfully!";
		  echo "<script>window.open('apply.php','_self')</script>";

	}else{
		echo "error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>

  

