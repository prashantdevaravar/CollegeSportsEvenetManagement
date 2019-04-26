<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {background-image:url(redshade.jpg); background-size:cover;background-position:center center;position:relative;top:0;bottom:0;height:100vh;z-index:-10;}
p {font-size:64pt;color:black;font-style:italic;align:center;}
body {background-image:Screenshot(1).png;}
input[type=submit]{color:white;background-color:blue;}
input[type=reset]{color:white;background-color:blue;}
td {color:blue;font-size:20px;}
</style>

</head>
<body>
</br>
</br>


<form action="trail.php" method="POST">
<table border="border" align="center">

<tr>
</tr>
<tr>
<th>NAME</th>
<th>GENDER</th>
<th>DOB</th>

<th>SEM</th>
<th>NO OF AWARDS</th>


<th>GMAIL</th>
<th> CONTACT No</th>
<th> SPORTS No</th>
<th> SPORTS NAME</th>

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
	
	
		
$query="SELECT name,price,cc,dd,ee,ff,gg,hh,ii FROM newplayer WHERE name='$_POST[NAME]' AND gg='$_POST[CONT]'";
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

</form>
</table>
</body>
</html>