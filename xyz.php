<?php
//create connection
$connect=mysqli_connect('localhost','root','','finalll');

//check connection
if(mysqli_connect_errno())
{
echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
echo' ';

?>
<html>
<body bgcolor="grey">

	<h1>WELCOME HOD</h1>
	<h2>Have a look of staff who are moving<h2>
<table style="width:50%" align= 'center' border = '3' style = 'border-collapse:collapse;padding:40px;'>
<caption><b>Movements</b></caption>
<tr ><th><b>Name</th><th><b>Reason</b></th><th><b>Time</b></th><th>Remark</b></th></tr>

<?php

$result=mysqli_query($connect,"select * from leave_");

while($row=mysqli_fetch_array($result))
{
$name = $row['name_'];
$ssn = $row['reason_'];
$age = $row['time_'];
$salary = $row['remarks_'];

echo "<tr><td>$name</td><td>$ssn</td><td>$age</td><td>$salary</td></tr>";

}
$connect->close();
?>
<style>
	 {background-color: #92a8d1;}
	 table,th,td{
	 	font-family:'Times New Roman',Times,serif;
	 	align-content: "center";
	 	text-align: "center";
	 	table-layout: aut0;
	 }


</style>

	
	


</table>
</body>
</html>