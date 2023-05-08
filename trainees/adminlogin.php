<?php
session_start();
include("config.php");
if (isset($_POST['login'])) {
$tusername=$_POST['ausername'];
$tpassword=$_POST['apassword'];
$sql="SELECT * FROM adminlogin WHERE username='$tusername' AND password='$tpassword' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	
	$row=mysqli_fetch_assoc($result);
	
	$_SESSION['username'] = $row['username'];
 	  echo '<script>alert("You are Logged in")
window.location.href="adminfirst.php"
        </script>';
    //echo " You Have Successfully Logged in";
	//header("loaction:./home.html");
}
else
{
	  echo '<script>alert("Invalid username/password!\nEnter valid username and password")
window.location.href="index.html"
        </script>';
}
}
else{
	echo '<script>alert("Unable to login")
	window.location.href="login.php"
			</script>';
}
?>