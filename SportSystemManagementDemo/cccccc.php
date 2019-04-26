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
	
$Sid=$_POST['year'];
$sql="SELECT * FROM spdetail1 where Date='".$Sid."'";

$result=$con-> query($query);
if($result->num_rows>0)
{
echo "info deleted";
}
else 
	echo "Record not found";
}

?>
	