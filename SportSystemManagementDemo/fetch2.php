<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {background-image:url(redshade.jpg); background-size:cover;background-position:center center;position:relative;top:0;bottom:0;height:100vh;z-index:-10;}
	th {color:pink;font-size:20pt;}
	td {color:Antiquewhite;font-size:16pt;}
	p {color:Antiquewhite;font-size:30pt;}
	a {color:Antiquewhite;font-size:24pt;}
	input[type=submit]{font-size:16pt;}
	input[type=text]{font-size:16pt;}
</style>

</head>
<body>
</br>
</br>


<p> Already conducted events</p>

<form action="trail.php" method="POST">
<table border="border" align="center">

<tr>
</tr>
<tr>
<th>Sid</th>
<th>Sportsname</th>
<th>Location</th>

<th>Date</th>
<th>Time</th>
<th> 1st prize</th>

<th>2nd prize</th>

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
$query="SELECT Sid,Sportsname,Location,Date,Time,First,Second FROM spdetail1 WHERE Date<NOW()";
$result=$con-> query($query);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){
	echo "<tr><td>".$row["Sid"]."</td><td>".$row["Sportsname"]."</td><td>".$row["Location"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["First"]."</td><td>".$row["Second"]."</td></tr>";
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
<table align="center">
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td><input type="text" placeholder="Enter Sid to be deleted" name="aaa" id="n1"/></td>
<td><input type="submit" id="n2" name="delete" value="delete" onclick="trail.php"/></td>
</tr>
</form>
</table>
</table>
</body>
</html>