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
	.bg{
		background-image:url('https://getwallpapers.com/wallpaper/full/f/3/3/765105-technology-background-images-1920x1080-free-download.jpg');
   font-family:arial, sans-serif;
   color: navy;
	}
#p{
	color: #E6EEFF;
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


.s{
  margin-left: 100px;
}
</style>
<body class="bg">
<fieldset><legend><h3>Application Form</h3></legend>
<div class="p">
<form method ="post" action="apply.php" enctype="multipart/form-data">
  Candidate Name:
  <input type="text" name ="Candidatename" placeholder="Full name" value="" required>
  <br><br>
   Gender - - - - - :
 <input type="radio" name="gender" value ="Male" >Male
 <input type="radio" name ="gender" value ="female" >Female<br><br>
  Father's Name --:
  <input type ="text" name="Fathername" placeholder="Full name "value ="" required><br><br>
  DATE OF BIRTH:
    <?php 
    $year_start  = 1940;
    $year_end = date('Y');
    $user_selected_year = 2021; 

    echo '<select name="DOB">'."\n";
    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
        $selected = ($user_selected_year == $i_year ? ' selected' : '');
        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'</option>'."\n";
    }
    echo '</select>'."\n";
    $selected_day = date('d');

    echo '<select name="DOB">'."\n";
    for ($i_day = 1; $i_day <= 31; $i_day++) { 
        $selected = ($selected_day == $i_day ? ' selected' : '');
        echo '<option value="'.$i_day.'"'.$selected.'>'.$i_day.'</option>'."\n";
    }
    echo '</select>'."\n";
    $selected_month = date('m'); 

    echo '<select name="DOB">'."\n";
    for ($i_month = 1; $i_month <= 12; $i_month++) { 
        $selected = ($selected_month == $i_month ? ' selected' : '');
        echo '<option value="'.$i_month.'"'.$selected.'>'. date('F', mktime(0,0,0,$i_month)).'</option>'."\n";
    }
    echo '</select>'."\n";
?><br><br>
  City Name - - - - : 
  <input type ="text" name="Cityname" placeholder="Residence City "value ="" required><br><br>
  Mobile No - - - - :
  <input type ="text" name="Mobileno" placeholder="Enter in digits"value ="" required><br><br>
  Email ID ----- - - :
  <input type="email" name ="Emailid"  placeholder=" enter email "value ="" required><br><br>
  
 Highest Qualification:<br>
 <div class="s">
 <input type="radio" name="currentg[]"value="10">10<br>
 <input type="radio" name="currentg[]"value="12">12<br>
 <input type="radio" name="currentg[]"value="U.G">UG<br>
 <input type="radio" name="currentg[]"value="P.G">PG<br>
</div>
  Class 10 Marks :
  <input type ="text" name="class10" placeholder="In C.G.P.A or %"value ="" required id=""><br><br>
  Class 12 Marks :
  <input type ="text" name="class12" placeholder="Percentile or % "value ="" required><br><br>
  Recent S.G.P.A :
  <input type ="text" name="semtotal" placeholder="Avg S.G.P.A "value ="" required><br><br>
  Enter FBD Marks:
  <input type="text" name ="Emailid"  placeholder="Enter Grade "value ="" required><br><br>

   Internship Applied for - - :
 <select name="field[]">
   <option></option>
   <option value="" > Internship Training on Machine Learning using Python</option>
   <option value=""> Digital Design using Verilog HDL</option>
   <option value="">Internship Training Embedded & IoT Systems</option>
   <option value="">Digital Design using Verilog HDL</option>
   <option value="">Internship Training on Virtualization and Cloud computing</option>
 </select><br><br>

  Why Should Be Hire You:
  <textarea rows="8" cols="70"name="about" placeholder="Max 100 words" value="" required></textarea><br><br>
 
 Upload Your Image: <input type="file" name="userfile">
<br><br>
 Upload Your Signature: <input type="file" name="userfile">
<br><br>
 Upload Your Resume: <input type="file" name="userfile">
<br><br>
 <center><input type="submit" name ="SAVE" value="SUBMIT" class="button"></center>
</form>
</fieldset>
</body>
</html>
</div>
<?php
if(isset($_POST['SAVE']))
{
	$cname= $_POST['Candidatename'];
	$fname= $_POST['Fathername'];
	$cityname= $_POST['Cityname'];
	$gender=$_POST['gender'];
	$email=$_POST['Emailid'];
  $class10=$_POST['class10'];
  $class12=$_POST['class12'];
  $sem=$_POST['semtotal'];
  $field=$_POST['field'];
  $mobile=$_POST['Mobileno'];
  $about=$_POST['about'];
  $fbd=$_POST['fbd'];
  $dob=$_POST['DOB'];

	$education=$_POST['currentg']; 
	$chk="";
	foreach($education as $chk1)
	{
		$chk.= $chk1.",";
	}
  $field=$_POST['field'];
  $pk="";
  foreach($field as $pk)
  {
    $pk.=$pk1.",";
  }
	$sql =" INSERT INTO form(Candidatename,Fathername,Cityname,gender,Emailid,currentg,semtotal,field,Mobileno,about,DOB,class10,class12,fbd)values('$cname','$fname','$cityname','$gender','$email','$chk','$sem','$pk','$mobile','$about','$dob','$class10','$class12','fbd')";
	if(mysqli_query($conn,$sql))
  {
		echo "<script>alert('APPLIED SUCCESSFULLY!!');</script>";
    echo "<script>window.open('website.php','_self')</script>";

	}else
  {
		echo "error:".$sql.".mysqli_error($conn)";
	}
	mysqli_close($conn);
}
?>