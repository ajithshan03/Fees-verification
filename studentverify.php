<?php
 $con=mysqli_connect('localhost','root','','Easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$snames = $_POST['snam'];
$strno =$_POST['srnum'];
$calculated_Amount="";

$result = mysqli_query($con,"SELECT * From student where studentName='$snames' and Rollnumber='$strno'");

echo "<center><h1>Fee's Details </h1></center>";
echo "<center><table border=1>
<tr>
<th>StudentName</th>
<th>RollNumber</th>
<th>CollegeName</th>
<th>Branch/Section</th>
<th>year</th>
<th>FeeName</th>
<th>Totalamount</th>
<th>payedAmount</th>
<th>PayedDate</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['StudentName'] . "</td>";
  echo "<td>" . $row['Rollnumber'] . "</td>";
   echo "<td>" . $row['CollegeName'] . "</td>";
   echo "<td>" . $row['BranchSection'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['FeesName'] . "</td>";
   echo "<td>" . $row['TotalAmount'] . "</td>";
  echo "<td>" . $row['payedAmount'] . "</td>";
 echo "<td>" . $row['PayedDate'] . "</td>";
 echo "</tr>";
 if($row['TotalAmount'] ==  $row['payedAmount'])
{
	echo"<script>alert('Your fees Are  Paid Completely ')</script>";
	
}
else
{
	$calculated_Amount = ( $row['TotalAmount'] - $row['payedAmount']);
	echo"<script>alert('Your Remaining balance $calculated_Amount')</script>";
	
}
}

echo "</table></center>";

 
mysqli_close($con);
 ?>
 <style>
 table {backGround-color:BlueViolet;}
 th{ backGround-color:BurlyWood;}
  tr{ backGround-color:Brown ;}
 </style>