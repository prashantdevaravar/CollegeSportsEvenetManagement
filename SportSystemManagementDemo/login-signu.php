<html>
<head></head>
<style type="text/css">
body {background-image:url(dnldnow2.jpg); background-size:cover;background-position:center center;position:relative;top:0;bottom:0;height:100vh;z-index:-10;}
td {font-size:18pt;color:black;}
p {font-size:22pt;color:black;align:center;}
body {background-image:Screenshot(1).png;}
input[type=submit]{color:white;background-color:blue;}
input[type=reset]{color:white;background-color:blue;}
input[type=text]
{
 border-color:red;
  
  
}
input[type=text]:focus
{
  
  border-color: red;
  
}
input[type=password]
{
 border-color:red;
  
  
}
input[type=password]:focus
{
  
  border-color: red;
  
}
</style>
<body>

<?php
if(version_compare(PHP_VERSION, '7.2.0', '>='))
{
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
$con= mysqli_connect("localhost","root","");
if(!$con)
{
	echo "not connected";
} 
if(!mysqli_select_db($con,"stud"))
{
	echo "not selected";
}
else{

if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $strSQL = mysqli_query($con,"select name from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
           include 'playermenuframe.html';
		   
			
        }
        else
        {
           echo "Invalid email or password!! OR account not created";
		   
        }        
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($con,$_POST['name']);
        $email      = mysqli_real_escape_string($con,$_POST['email']);
        $password   = mysqli_real_escape_string($con,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($con,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
              echo "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            echo $email." Email already exist!!";
        }
        else
        {
            $sql="insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')";
			if(!mysqli_query($con,$sql))
			{
            echo "sign_up failed";
			}
			else
			{
				echo "uccussfull signup";
			}
        }
	}
}
}
 
?>
<!-- Login and Signup forms -->

<div id="tabs">

   <h1 align="center">Student Login/Sign_Up Page</h1>
 
            
  <div id="tabs-1">
  <form action="playermenuframe.html" method="post">
  <table align="center">
    <tr><td><input id="email" name="email" required type="text" placeholder="Email"></td></tr><tr></tr><tr></tr><tr></tr>
        <tr><td><input id="password" name="password" required type="password" placeholder="Password"></td></tr><tr></tr><tr></tr>
        <tr><td><input name="action" type="hidden" value="login" /></td></tr>
       <tr><td><input type="submit" value="Login"/></td></tr>
	</table>
  </form>
  </div>
  <div id="tabs-2">
    <form action="" method="post">
	<table align="center">
   <tr><td><input id="name" name="name" type="text" placeholder="Name"/></td></tr><tr></tr><tr></tr><tr></tr>
    <tr><td><input id="email" name="email" type="text" placeholder="Email"/></td></tr><tr></tr><tr></tr><tr></tr>
    <tr><td><input id="password" name="password" type="password" placeholder="Password"/></td></tr>
    <tr><td><input name="action" type="hidden" value="signup" /></td></tr>
    <tr><td><input type="submit" value="Signup" /></td></tr>
	</table>
	</form>
  </div>
</div>

</body>
</html>

  
  
	


