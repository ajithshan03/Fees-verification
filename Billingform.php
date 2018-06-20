<?php
ob_start();
   session_start();
 $con=mysqli_connect('localhost','root','','Easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$b_no = $_POST['BRollno'];
$b_fname=$_POST['BFeesName'];
$b_yr=$_POST['Byear'];


$result = mysqli_query($con,"SELECT * From student where  Rollnumber='$b_no' and FeesName='$b_fname' and Year='$b_yr' ");
  echo "<center><h1>Student Bill</h1></center>";
while($row = mysqli_fetch_array($result)) {
	
	 echo "<center>";
	 echo "<center><h3>  $b_no -- Fee's Bill </h3></center>";
echo "<center><table class=bill>";
  echo "<tr>";
 echo "<th>Student Name</th>";
  echo "<td>" . $row['StudentName'] . "</td>";
    echo "</tr>";
  echo "<tr><th>Roll Number</th><td>" . $row['Rollnumber'] . "</td>";
   echo "</tr>";
    echo "<tr>";
	echo "<th>College Name</th>";
   echo "<td>" . $row['CollegeName'] . "</td>";
    echo "</tr>";
echo "<tr>";
echo "<th> Branch/Section</th>";
   echo "<td>" . $row['BranchSection'] . "</td>";
  echo "</tr>";
echo "<tr>";
echo "<th> Year</th>"; 
echo "<td>" . $row['Year'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th> Fees Name</th>"; 
  echo "<td>" . $row['FeesName'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th> Total Amount</th>"; 
   echo "<td>" . $row['TotalAmount'] . "</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th> Payed Amount</th>"; 
  echo "<td>" . $row['payedAmount'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th> Payed Date</th>"; 
 echo "<td>" . $row['PayedDate'] . "</td>";
 echo "</tr>";
 }

echo "</table></center>";
echo"<h5>In-charge-Sign ____________________   Student-Sign  ____________________</h5>";

echo "<input type=\"button\" value=\"Print this Bill\" onclick=\"printpage()\" />";

mysqli_close($con);
?>
<html>
<head>
<style>
table {
	background-color:Beige;
}
h5{
	text-align:center-left;
}
p{
	font-weight : strong;
}
.bill{
	width:300px;
	border:1px solid #306bc1;
}
.bill tr
{
	border:1px solid #306bc1;
text-align: left;	
}
.bill tr td,th{
	height:30px;
	border:1px solid #306bc1;
	border:1px solid #306bc1;
	border:1px solid #306bc1;
	border:1px solid #306bc1;
	border:1px solid #306bc1;
	border:1px solid #306bc1;
}
#outer
{
  border-collapse:collapse;
  border: 0px solid black;
  height:250px;width:420px;
 }

</style>
<script type="text/javascript">
function printpage()
  {
  window.print()
  }
</script>
