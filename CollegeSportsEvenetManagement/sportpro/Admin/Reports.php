<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<header>
<img src="http://vectorlogofree.com/wp-content/uploads/2013/01/canadian-olympic-team-logo-vector-400x400.png" width="100px" height="80px">
<h1 class="liketext">BEC Sports
<a href ="index.html"> <input type="button" value="Logout" style="float:right;"></a></h1>
</header>
<div class="row">
<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="Add Events.html">Add Events</a></li>
			<li><a href="Edit Events.php"">Edit Events</a></li>
			<li><a href="#" style="color:red;">Reports</a></li>
			<li><a href="Results.php" >Results</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
  <h1>Reports</h1>                          
 <div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff"> 
 <form action="" method="post">
Type:<select name="type" class="smalltext">
  <option value="indoor">Indoor</option>
  <option value="outdoor">Outdoor</option>
</select>
Event Name:<select name="event" class="smalltext">
  <option value="cricket">Cricket</option>
  <option value="football">Football</option>
</select><br><br>

 <input type="submit" value="GET Report">
</form>
</div>
<br><br>
<table>
<tr>
<th>Name </th>
<th>Class</th>
<th>E-mail</th>
<th>Contact</th>
</tr>
<?php
error_reporting(0);
$event_name = $_POST['event'];
$type= $_POST['type'];

$host="localhost";
$user="root";
$password="";
$db="id1298591_sportpro";
 
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);
//echo "Connected successfully";
// Check connection
//$sql = "SELECT * FROM entry where event='$event_name' AND type='$type'";
$sql = "SELECT * FROM entry where event='$event_name' AND type='$type'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["username"]."</td><td>" . $row["class"]."</td><td>" . $row["email"]."</td><td>" . $row["contact"]."</td>";
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();

?>
  </table>
</div>


</div>

<footer>
  <p>Copyright 2015-2019 by BEC-BGK. All Rights Reserved.</p>
</footer>

</body>
</html>