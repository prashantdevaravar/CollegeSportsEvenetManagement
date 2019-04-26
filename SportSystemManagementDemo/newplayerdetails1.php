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
$name=$_POST['NAME'];
$price=$_POST['PRICE'];
$cc=$_POST['CC'];
$dd=$_POST['DD'];
$ee=$_POST['EE'];
$ff=$_POST['FF'];
$gg=$_POST['GG'];
$hh=$_POST['HH'];


$sql="INSERT INTO newplayer1(NAME,PRICE,CC,DD,EE,FF,GG,HH) VALUES ('$name','$price','$cc','$dd','$ee','$ff','$gg','$hh')";
if(!mysqli_query($con,$sql))
{
	echo "registration failed...";
}
else
	echo "successfull registration";
}
?>

