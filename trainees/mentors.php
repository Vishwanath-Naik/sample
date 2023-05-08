<?php
session_start();
if(!$_SESSION['username']){
	header('Location:index.html');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mentors.css">
  <link rel="stylesheet" href="fonts.css">
  <title>Document</title>
</head>
<body>
  <div class="full">
  <div class="navbar">
         
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
     <div class="head1">
      <h2 class="j2">
      <span class="j2" style="font-size:3em;">MENTORS</span>
      </h2>
     </div>
     <div class="searches">
      <div class="srow">
      <input type="text" class="myInput" onkeyup="myFunction()" placeholder="Search for Name.." title="Type in a name">
      <input type="text" class="myInput" onkeyup="myFunction()" placeholder="Search for Place.." title="Type in a name">
      <input type="text" class="myInput" onkeyup="myFunction()" placeholder="Search for Department.." title="Type in a name">
      </div>
     </div>
     <div class="tcards">
     <ul id="myUL">
  <li CLASS="r1">
  <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
            <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
            <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
  </li>
  <li>
  <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
            <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
            <div class="per">
              <div class="polaroid">
                <img class="polimg" src="image/thej.jpeg" alt="5 Terre" style="width:100%">
                <div class="container">
                <p>PERSON 2<BR>PRESIDENT</p>
                </div>
              </div>
              
            </div>
  </li>

 
  
</ul>
     </div>
  </div>
  
</body>
</html>