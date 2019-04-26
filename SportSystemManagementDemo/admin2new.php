<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	echo "not connectted";
}


	if(!mysqli_select_db($con,"demo"))
{

	
	echo "db not selected";
}
else
{
$sportsname=$_POST['Sportsname'];
$location=$_POST['Location'];
$date=$_POST['Date'];
$Time=$_POST['time'];
$First=$_POST['first'];
$Second=$_POST['second'];
$sql="INSERT INTO spdetail1(Sportsname,Location,Date,time,first,second) VALUES ('$sportsname','$location','$date','$Time','$First','$Second')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
	include 'admin2.html';
}
?>

