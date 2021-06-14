<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.button{
	font-family: arial, sans-serif;
  background-color: lightgreen;
        border: none;
        color: blue;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        
}
#l  {background-image:url("https://wallpaperaccess.com/full/893576.jpg");
     color: white;

     }
	</style>

</head>
<body id="l">
<H3>REGISTERED CANDIDATES</H3>
<form method ="post" action="retrive.php">
<input type="submit" name="SHOW" value="SHOW" class=button>
</form>
<h3> APPLIED CANDIDATES</h3>
<form method ="post" action="fetch.php">
<input type="submit" name="show" value="SHOW" class=button>
</form>
</body>
</html>