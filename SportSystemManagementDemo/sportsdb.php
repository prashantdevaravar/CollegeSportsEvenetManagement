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
$Sid=$_POST['sid'];
$Sportsname=$_POST['sportsname'];
$Location=$_POST['location'];
$Date=$_POST['date'];
$Time=$_POST['time'];
$First=$_POST['first'];
$Second=$_POST['second'];
$sql="INSERT INTO spdetail1(sid,sportsname,location,date,time,first,second) VALUES ('$Sid','$Sportsname','$Location','$Date','$Time','$First','$Second')";
if(!mysqli_query($con,$sql))
{
	echo "Event Already Scheduled for selected venue and time, Please try with diffent venue or time";
}
else
	echo"inserted";
}
?>

