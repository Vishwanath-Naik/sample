<?php
session_start();
if(!$_SESSION['username']){
	header('Location:index.html');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminfirst.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,600&family=Patua+One&family=Prompt:ital,wght@1,500&family=Signika:wght@500&family=Volkhov:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title>MRPL TRAINEES</title>
</head>
<body>
    <div class="fullpage">
        <div class="navbar">
          <div class="backk">

          </div>
            <ul class="nav">
                <li class="logo">
                    <img src="image/logo.png" alt="MRPL">
                </li>
                <li class="compname">
                    <p id="maintext-hindi" style="margin-bottom:0;">मंगलूर रिफाइनरी एंड पेट्रोकेमिकल्स लिमिटेड</p>
                    <p id="maintext" style="margin : 0; padding-top:0;" ><b>Mangalore Refinery and Petrochemicals Limited</b></p>
                    <p id="subtext" style="margin-top : 0; padding-top:0;">(A Govt. of India Enterprise and a subsidiary of ONGC Ltd.)</p>
                </li>
              
                <li style="float:right" class="traineetext">
                    <p id="righttext">MRPL TRAINEES</p>
                </li>
            </ul>


        </div>
        <div class="logg">
           <button class="bb1" onClick="history.go(-1);">
                Go Back
            </button>
            <a href="./logout.php"><button class="bb2">
                Log Out
            </button></a>
        </div>
       <div class="body">
        <div class="sidebar">
          <div class="heading">
            <p class="hhh"><span class="hhhh">EXPLORE</span></p>



            <div class="wrapper">
         <div class="display">
            <div id="time"></div>
         </div>
         <span></span>
         <span></span>
      </div>
      <script>
         setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
         });
      </script>

      
          </div>
            
          
</div>
        </div>
        <?php

include("config.php");

$tusername=$_SESSION['username'];
$sql="SELECT * FROM adminlogin WHERE username='$tusername' ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) 
?>
    
    <div class="profile">
          <div class="card">
            <img class="person" src="./uploads/<?=$row['image']?>" alt="ADMIN" style="width:100%">
            <h1><?php echo $row['name']?></h1>
            <p class="title"><?php echo $row['dept']?></p>
            <p>ADMIN</p>
          
           <!-- <div style="margin: 24px 0;">
              <a  class="symbols" href="#"><i class="fa fa-dribbble"></i></a> 
              <a class="symbols" href="#"><i class="fa fa-twitter"></i></a>  
              <a class="symbols" href="#"><i class="fa fa-linkedin"></i></a>  
              <a class="symbols" href="#"><i class="fa fa-facebook"></i></a> 
            </div>-->
            <p><button class="btn">username :<?php echo $row['username']?></button></p>
          </div>
        </div>
        <div class="btns">
       <button onclick="document.getElementById('id01').style.display='block'" class="button-73" id="btn1" role="button" style=" margin-top:5px !important;
      margin-bottom:5px !important;">Register a Trainee</button>
      <!--MODAL STARTS-->
      <div id="id01" class="modalreg" >
       <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Form">&times;</span>
        <form class="modal-content"  method="post" action="./regtrainee.php"  enctype="multipart/form-data">
         <div class="container">
           <h1 style="text-align:center;">Register a Trainee</h1>
           <hr>
      <label for="pname"><b>Punch Card Number</b></label>
      <input type="text" placeholder="Enter Punch Card Number" name="pname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="mob"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="mob" required>

      <label for="place"><b>Place of Stay during Internship</b></label>
      <input type="text" placeholder="Enter Place" name="place" required>

      <label for="rname"><b>Referred By</b></label>
      <input type="text" placeholder="Enter Referee Name" name="rname" required>

      <label for="cname"><b>College</b></label>
      <input type="text" placeholder="Enter College" name="cname" required>

      <label for="branch"><b>Branch</b></label>
      <input type="text" placeholder="Enter Branch" name="branch" required>

      <label for="dept"><b>Department</b></label>
      <input type="text" placeholder="Enter Department" name="dept" required>

      <label for="date"><b>Joining Date</b></label>
      <input type="date" placeholder="Enter Joining Date" name="date" required><br>

      <div class="profile" style="margin-top:-6em; ">
      <label for="image" ><b>Image</b></label>
      <input type="file" placeholder="Upload your passport size photo" name="image" required></div>

      <div class="clearfix" >
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn rbtn">Cancel</button>
        <button type="submit" class="signupbtn rbtn" name="register">Register</button>
      </div>
    </div>
  </form>
</div>
  <!--MODAL ENDS-->




         <a href="adminview.php"> <button class="button-73" id="btn2" role="button" style=" margin-top:5px !important;
      margin-bottom:5px !important; margin-left:0.65em;">View all Interns</button></a>
       <a href="deletetrainee.php">  <button class="button-73" id="btn3" role="button" style=" margin-top:5px !important;
      margin-bottom:5px !important;">Remove a Trainee</button></a>
        </div>
      </div>
    </div>
    <script>
      function checkAll() {
        var inputs = document.getElementsByName('foods');  ; 
        for (var i = 0; i < inputs.length; i++) { 
            inputs[i].checked = true; 
        } 
                          }
                          function getCheckboxValue() {

  
var markedCheckbox = document.getElementsByName('foods');  
var res=" ";
for (var checkbox of markedCheckbox) {  
  if (checkbox.checked)  
   res=res+checkbox.value+", ";  
}

if(res==" ")
{
  confirm("You have selected No Food Item. \nThank you for Visiting!!!") 
  
}
//return document.getElementById("result").innerHTML = "You have selected No Food Item. <br>Thank you for Visiting!!!";
else
{
  res=res+"!!!"
  confirm("You have selected " + res + " \nThank you for booking!!!");
//return document.getElementById("result").innerHTML = "You have selected " + res + " <br>Thank you for booking!!!";
}

                          }

    </script>
    
</body>
</html>