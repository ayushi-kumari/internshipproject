<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
#log{
	background-image: url("https://th.bing.com/th/id/R3e4fe0a9dac2125cf3b523fd726b5fd0?rik=hwDg0zPOAfHxOA&riu=http%3a%2f%2fwww.wallpapersin4k.org%2fwp-content%2fuploads%2f2017%2f04%2fWeb-Page-Wallpaper-10.jpg&ehk=TYXyKA5wl2g%2br2rs%2fxuMfNVrGUgkumXN7X0i3glkAuA%3d&risl=&pid=ImgRaw");

margin-bottom: 500px;
margin-right: 300px;
margin-top: 250px;
margin-left: 100px;
font-size: 20px;
color: antiquewhite;
}
	.button{
	font-family: arial, sans-serif;
  background-color: firebrick;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        margin-left: 50px;
        
}
</style>
</head>
<body id="log">
<center>
	<h2> Only for Admin!!</h2>
<form method="post" action="login.php">
	USER -------: <input type="text" name="user"><br>
	PASSWORD:<input type="password" name="password"><br>
	<br>
	<input type="submit" name="submit" value="LOGIN" class="button">
</form>
</center>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['user'];
	$pass=$_POST['password'];
	if($name=="admin" and $pass=="1234")
		{   echo "<script>alert('login')</script>";
			echo'<script>window.open("admin.php")</script>';
		}
		else
		{
			echo "wronng username and password";
		}
}
?>