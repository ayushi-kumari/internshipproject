<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "internship";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM register");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 3px solid blue;
    text-align: left;
    padding: 8px;

}
#l{
    background-image: url("https://backgroundcheckall.com/wp-content/uploads/2018/10/simple-design-background.png");
}


</style>
 </head>
<body id="l">
<h2> REGISTERED CANDIDATES!!</h2>
   <?php
if (mysqli_num_rows($result)>0) {
?>
  <table>
    <tr>
    <th>First Name</th>
    <th>Mobile no</th>
    <th>City</th>
    <th>Password</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Mobileno"]; ?></td>
    <td><?php echo $row["City"]; ?></td>
    <td><?php echo $row["Password"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>