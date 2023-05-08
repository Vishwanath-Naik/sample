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
  <link rel="stylesheet" href="./tfinal.css" />
  <link rel="stylesheet" href="fonts.css" />
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
      <span class="j2" style="font-size:3em;">TRAINEES</span>
      </h2>
     </div>
     <div class="searches">
      <div class="srow">
      <input type="text" id="myInput1" class="myInput" onkeyup="myFunction1()" placeholder="Search for Name.." title="Type in a name">
      <input type="text" id="myInput2" class="myInput" onkeyup="myFunction2()" placeholder="Search for Place.." title="Type in a name">
      <input type="text" id="myInput3" class="myInput" onkeyup="myFunction3()" placeholder="Search for Department.." title="Type in a name">
      </div>
     </div>
     <div class="tcards" id="card-list">
     <?php

include("config.php");
$quariy = mysqli_query($conn,"select * from trainee");
while ( $row = mysqli_fetch_array($quariy) ) :

?>
      <div class="per">
        
         <div class="polaroid" id="ccard">
                <div class="polimg"  alt="Trainee Image" style="width:100%">
               
                   <img src="uploads/<?=$row['image']?>" class="polimg"  style="object-fit: cover;" alt="Trainee Image" style="width:100%"/>
                 </div>
                <div class="container" >
                <p ><span class="name" id="pname"><?php echo $row['name']?><BR></span>
                    <span class="dept"><?php echo $row['dept']?><BR></span>
                    <span class="place"><?php echo $row['place']?><BR></span>
                  
                </p>
                </div>
           </div>
      </div>


<?php
endwhile;
?>
  </div>
  <script>
    function myFunction1() {
      const filter = document.getElementById('myInput1').value.toUpperCase();
      const containerr = document.getElementById('card-list');
      
      const cards = containerr.getElementsByClassName('polaroid');
      console.log(cards);
      for(let i=0;i<cards.length;i++)
      {
        let title=cards[i].querySelector(".container span.name");
        console.log(title);
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
      }

}

function myFunction2() {
      const filter = document.getElementById('myInput2').value.toUpperCase();
      const containerr = document.getElementById('card-list');
      
      const cards = containerr.getElementsByClassName('polaroid');
      console.log(cards);
      for(let i=0;i<cards.length;i++)
      {
        let title=cards[i].querySelector(".container span.place");
        console.log(title);
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
      }

}


function myFunction3() {
      const filter = document.getElementById('myInput3').value.toUpperCase();
      const containerr = document.getElementById('card-list');
      
      const cards = containerr.getElementsByClassName('polaroid');
      console.log(cards);
      for(let i=0;i<cards.length;i++)
      {
        let title=cards[i].querySelector(".container span.dept");
        console.log(title);
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
      }

}
    </script>
  
</body>
</html>