
<?php 
 
$host="localhost";
$user="root";
$password="";
$db="admindemo";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
 

    
    $uname=$_POST['user'];
    $password=$_POST['pass'];
    
   
    
    if($uname=="admin" && $password=="admin"){
        
		include 'adminframmenu.html';
        exit();
    }
    else{
        echo " You Have Entered Incorrect name or Password";
        exit();
    }
        

?>
