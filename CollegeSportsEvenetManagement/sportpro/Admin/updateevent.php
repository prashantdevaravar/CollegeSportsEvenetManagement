<?php
$event_name=$_POST['ename'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$time=$_POST['time'];
$host="localhost";
$user="root";
$password="";
$db="id1298591_sportpro";
 
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);
//echo "Connected successfully";

$sql = "UPDATE event set type='$type',description='$description',start_date='$start_date',end_date='$end_date',time='$time' where event_name='$event_name'";

if ($conn->query($sql) === TRUE) {
	
echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "Edit Events.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>