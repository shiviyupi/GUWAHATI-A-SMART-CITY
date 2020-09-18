<?php 
extract($_POST);
if(isset($save))
{
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}




?>


<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered" style="margin-bottom:50px">
<caption><h2 align="center">Registration Form</h2></caption>
<Tr>
<Td colspan="2"><?php echo @$err;?></Td>
</Tr>
	
<tr>
<td>Enter Your name</td>
<Td><input  type="text" name="name" class="form-control" required/></td>
</tr>
<tr>
<td>Enter Your email </td>
<Td><input type="email" name="email" class="form-control" required/></td>
</tr>
<tr>
<td>Enter Your Password </td>
<Td><input type="password" name="password" class="form-control" required/></td>
</tr>
			
<tr>
<td>Enter Your Mobile </td>
<Td><input type="text" name="mobile" class="form-control" required/></td>
</tr>
		
<tr>
<td>Select Your Programme</td>
<Td><select name="programme" class="form-control" required>
					
<option>BTECH</option>
<option>MTECH</option>
<option>PHD-IT</option>
<option>PDH CS</option>
</select>
</td>
</tr>
	
<tr>
<td>Select Your Semester</td>
<Td><select name="sem" class="form-control" required>
		
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
</select>
</td>
</tr>
				
<tr>
<td>Select Your Gender</td>
<Td>
Male<input type="radio" name="gender" value="male"/>
Female<input type="radio" name="gender" value="female"/>	
</td>
</tr>
			
<tr>
<td>Choose Your hobbies</td>
<Td>
Reading<input value="reading" type="checkbox" name="hob[]"/>
Singing<input value="singin" type="checkbox" name="hob[]"/>
		
Playing<input value="playing" type="checkbox" name="hob[]"/>
</td>
</tr>

				
<tr>
<td>Upload  Your Image </td>
<Td><input type="file" name="img" class="form-control" required/></td>
</tr>
				
<tr>
<td>Enter Your DOB</td>
<Td>
<select style="width:100px;float:left" name="yy" class="form-control" required>
<option value="">Year</option>
<?php 
for($i=1950;$i<=2016;$i++)
{
echo "<option>".$i."</option>";
}					
>
</select>
<select style="width:100px;float:left" name="mm" class="form-control" required>
<option value="">Month</option>
<?php 
for($i=1;$i<=12;$i++)
{
echo "<option>".$i."</option>";
}					
?>
					
</select>
					
 					
<select style="width:100px;float:left" name="dd" class="form-control" required>
<option value="">Date</option>
<?php 
for($i=1;$i<=31;$i++)
{
echo "<option>".$i."</option>";
}					
?>
	
</select>
			
</td>
</tr>
				
<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save"/>
<input type="reset" value="Reset" class="btn btn-info"/>
				
</td>
</tr>
</table>
</form>
</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>