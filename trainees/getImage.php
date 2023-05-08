<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  session_start();
  include("config.php");

  $sql = "SELECT image from trainee where punchno=777";
  $result=mysqli_query($conn,$sql);
  $row = mysql_fetch_assoc($result);
 

  header("Content-type: image/jpeg");
  echo $row['dvdimage'];
?>