<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {background-image:url(download5.png); background-size:cover;background-position:center center;position:relative;top:0;bottom:0;height:100vh;z-index:-10;}
	th {color:pink;font-size:20pt;}
	td {color:Antiquewhite;font-size:16pt;}
	a {color:Antiquewhite;font-size:24pt;}
	input[type=submit]{font-size:16pt;}
	input[type=text]{font-size:16pt;}
</style>

</head>
<body>
</br>
</br>


<form action="sportsplayer.html" method="POST">
<table border="border" align="center">

<tr>
</tr>
<tr>
<th>name</th>
<th>gender</th>
<th>DOB</th>

<th>sem</th>
<th>no of awards</th>


<th>Gmail</th>
<th> contact No</th>
<th> sports No</th>
<th> sports Name</th>

</tr>
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
	
$query="SELECT name,price,cc,dd,ee,ff,gg,hh,ii FROM newplayer WHERE ii='coco'";
$result=$con-> query($query);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){
	echo "<tr><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["cc"]."</td><td>".$row["dd"]."</td><td>".$row["ee"]."</td><td>".$row["ff"]."</td><td>".$row["gg"]."</td><td>".$row["hh"]."</td><td>".$row["ii"]."</td></tr>";
}
echo "</table>";
}
else
{
	echo "0 result";
}
$con->close();
	
}
?>
<tr></tr><tr></tr>
<input type="submit"  value="back" name="back"/>

</form>
</table>
</body>
</html>