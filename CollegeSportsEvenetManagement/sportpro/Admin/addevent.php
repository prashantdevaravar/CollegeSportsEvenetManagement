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

// Create connection

// Check connection

//echo "Connected successfully";
$sql = "INSERT INTO event(event_name,type,description,start_date,end_date,time,status)
VALUES ('$event_name','$type','$description','$start_date','$end_date','$time','ongoing')";
if ($conn->query($sql) === TRUE) {	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Event Added Sucessfully");'; 
echo 'window.location.href = "Add Events.html";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>