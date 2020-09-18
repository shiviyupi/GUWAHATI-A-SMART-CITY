<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php 
	

//all emergency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange'>Total Number of Students : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:green'>Total Number feedback given by users  : $r2</h2>";	


			

?>
<h3><a href="http://localhost/assam/user/FILE-UPLOAD-DOWNLOAD/index.php">  <CENTER> CLICK HERE TO UPLOAD YOUR CONTENT </A></CENTER></h3>
