<?php
$servername="localhost";
$username ="root";
$password="";
$database="internship";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<style type="text/css">
#log{
	background-image:url("https://static.vecteezy.com/system/resources/previews/000/230/997/original/vector-abstract-low-poly-design-background.jpg") ;
	
	font-size: 20px;
}
.button{
	font-family: arial, sans-serif;
  background-color: navy;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        
}
</style>
<body id="log">
<h4> KINDLY REGISTER TO LOGIN!!</h4>
<center>
<form method="post">
	Username:<br><br>
	<input type="text" name="user"><br>
	password:<br><br>
	<input type="password" name="password"><br>
	<input type="submit" name="submit" value="LOGIN" class="button">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['user'];
	$password=$_POST['password'];
	$que= mysqli_query($conn,"SELECT* FROM register where Name='$name' and Password='$password'");
	if(mysqli_num_rows($que)>0)
	{
		echo"<script>alert('LOGIN successfully')</script>";
		echo "<script>window.open('apply.php','_self')</script>";

	}
	else
	{
		echo"<script>alert('username and passwrd incorrect')</script>";
		echo "<script>window.open('website.php','_self')</script>";
	}
}
?>