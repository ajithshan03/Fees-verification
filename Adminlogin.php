
<?php
ob_start();
   session_start();
 $con=mysqli_connect('localhost','root','','Easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$user_name=$_POST['uname'];
$passwd=$_POST['pass'];

$v=0;
$valid=0;
$valid=0;
$tempuser="";
$temppass="";


$result = mysqli_query($con,"SELECT * From  admin where Admin_id='$user_name' and Admin_pass='$passwd'");

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
 {	
	$tempuser = $row['Admin_id'];
	
	
	$temppass = $row['Admin_pass'];
	}
	
	
if(($user_name==$tempuser)&&($passwd==$temppass))
	 {
	 echo "<script>alert('Login Sccuess')</script>";
 }else
	 {
		 $valid=1;
		header("location:login2.php?err=".$valid);
		exit;
    
	 }
mysqli_close($con);
 ?>