<?php
session_start();
include("config.php");
if (isset($_POST['delete'])) {
$tusername=$_POST['id'];

$sql="DELETE FROM trainee WHERE punchno='$tusername' ";
$result=mysqli_query($conn,$sql);
if($result)
{

 	  echo '<script>
	   var  carnr = "'.$tusername.'"
	  alert("Trainee "+ carnr +" deleted")
window.location.href="deletetrainee.php"
        </script>';
    //echo " You Have Successfully Logged in";
	//header("loaction:./home.html");
}
else
{
	  echo '<script>alert("Due to some unknown error, could not delete this trainee. \n Try Again!!!")
window.location.href="adminfirst.php"
        </script>';
}
}
else{
	echo '<script>alert("Due to some unknown error, could not delete this trainee. \n Try Again!!!")
	window.location.href="adminfirst.php"
			</script>';
}
?>