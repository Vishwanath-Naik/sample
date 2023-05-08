<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trial.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="tcards">
     
<?php
session_start();
include("config.php");
$quariy = mysqli_query($conn,"select * from trainee");
while ( $row = mysqli_fetch_array($quariy) ) :

?>
      <div class="per">
         <div class ="row">
         <div class="polaroid">
                <div class="polimg"  alt="Trainee Image" style="width:100%">
               
               <img src="uploads/<?=$row['image']?>" class="polimg"  style="object-fit: cover;" alt="Trainee Image" style="width:100%"/>
                 </div>
                <div class="container">
                <p class="name"><?php echo $row['name']?><BR>
                <span class="place"><?php echo $row['dept']?><BR></span>
                <span class="dept"><?php echo $row['place']?><BR></span></p>
                </div>
              </div>
         </div>
</div>

<?php
endwhile;
?>


</div>
<div>
  
<img class="person" src="./uploads/veena.png" alt="ADMIN" style="width:100%">
  <button></button>

