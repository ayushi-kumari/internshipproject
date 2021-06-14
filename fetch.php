<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "internship";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM form");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
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
<h2> APPLIED CANDIDATES!!</h2>
   <?php
if (mysqli_num_rows($result)>0) {
?>
  <table>
    <tr>
    <th>Candidate Name</th>
    <th>Father name</th>
    <th>City Name</th>
    <th> Gender</th>
    <th> DOB</th>
    <th>Email ID</th>
    <th>Class 10 marks</th>
    <th>Class 12 marks</th>
    <th>Semester Total</th>
    <th>Education</th>
    <th>Mobile no</th>
    <th>FBD Test marks </th>
    <th>About</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Candidatename"]; ?></td>
    <td><?php echo $row["Fathername"]; ?></td>
    <td><?php echo $row["Cityname"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["DOB"]; ?></td>
    <td><?php echo $row["Emailid"]; ?></td>
    <td><?php echo $row["class10"]; ?></td>
    <td><?php echo $row["class12"]; ?></td>
    <td><?php echo $row["semtotal"]; ?></td>
    <td><?php echo $row["currentg"]; ?></td>
    <td><?php echo $row["Mobileno"]; ?></td>
    <td><?php echo $row["fbd"]; ?></td>
    <td><?php echo $row["about"]; ?></td>




    
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