<?php
include 'fetch2.php';
if(isset($_POST['delete']))
{
	
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
	
$sid=$_POST['aaa'];
$query= "DELETE FROM spdetail1 WHERE Sid='".$sid."'";
if(mysqli_query($con,$query))
{
echo "info deleted";
}
else 
	echo "Record not found";
}
}
?>
	