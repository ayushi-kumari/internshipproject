<?php
$servername="localhost";
$username ="root";
$password="";
$database="internship";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("connection failed:".mysql_error());
}
?>
<!doctype html
<html>
<style type="text/css">
#l{
	background-image: url("https://backgroundcheckall.com/wp-content/uploads/2018/10/simple-design-background.png");
}
.button{
  font-family: arial, sans-serif;
  background-color: darkblue;
        border: none;
        color: floralwhite;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
 }   
 .d{
 	font-size: 20px;
 	 }    

</style>
<body id="l">

<center>
<h2> Candidate Registration..</h2>
<form method ="post" action="passwrd.php">
  <div  class="d" >Candidate name:<br></div>
  <input type="text" name ="Name" placeholder="Enter full name" value="" required><br><br>
 <div class="d">Enter the mobile no:<br></div>
   <input type ="text" name="Mobileno" placeholder="In digits"value ="" required><br><br>
 <div class="d">Enter the city name: <br></div>
  <input type ="text" name="City" placeholder="Enter the city"value ="" required><br><br>
 <div class="d"> Create password:<br></div>
  <input type="text" name="Password" placeholder="In letters"value ="" required><br><br>
  <input type="submit" name ="save" value="SUBMIT" class="button">
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['save']))
{
	$Name= $_POST['Name'];
	$Mobileno= $_POST['Mobileno'];
	$City= $_POST['City'];
	$Password=$_POST['Password'];
	$sql ="INSERT INTO register(Name,Mobileno,City,Password)values('$Name','$Mobileno','$City','$Password')";
	if(mysqli_query($conn,$sql))
  {
		echo"<script>alert('You have been registered successfully!');</script>";
    echo"<script>window.open('website.php','_self')</script>";

	}else{
		echo "error:".$sql.".mysqli_error($conn)";
	}
	mysqli_close($conn);
}
?>