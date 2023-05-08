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
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="fonts.css">
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
          </div>
            
          
          <div class="canteen">
             <div id="maincontent">
              <p  onclick="document.getElementById('id012').style.display='block'" class="txt" id="p1">Canteen Specials Chart</p>
               <!--MODAL STARTS-->
      <div id="id012" class="modalreg" >
       <span onclick="document.getElementById('id012').style.display='none'" class="close" title="Close Form">&times;</span>
        <div class="modal-content">
         <div class="container">
           <h1 style="text-align:center;">Canteen Specials Chart</h1>
           <hr>
      
     
    </div>
</div>
 
</div>
            </div>
</div>


            <div class="bus">
              <div id="maincontent2">
              <p onclick="document.getElementById('id013').style.display='block'"  class="txt" id="p2">Bus Timings</p>
                       <!--MODAL STARTS-->
      <div id="id013" class="modalreg" >
       <span onclick="document.getElementById('id013').style.display='none'" class="close" title="Close Form">&times;</span>
        <div class="modal-content" style=" height:auto;">
         <div class="container">
           <h1 style="text-align:center;"> Chota Gate Bus Timings</h1>
           <hr>
           <table>
        <tr>
        <th> Surathkal to Bajpe
        </th>
        <th> Bajpe to Surathkal</th>
        
        </tr>
        <tr>
          <td>7:45am</td>
          <td>7:35am</td>
        </tr>
        <tr>
          <td>7:50am</td>
          <td>8:00am</td>
        </tr>
        <tr>
          <td>8:25am</td>
          <td>8:05am</td>
        </tr>
        <tr>
          <td>8:40am</td>
          <td>8:25am</td>
        </tr>
        <tr>
          <td>2:10am</td>
          <td>2:15am</td>
        </tr>
        <tr>
          <td>2:50am</td>
          <td>2:45am</td>
        </tr>
         <tr>
          <td>3:20am</td>
          <td>3:15am</td>
        </tr>
        <tr>
          <td>3:45am</td>
          <td>4:05am</td>
        </tr>
        <tr>
          <td>4:05am</td>
          <td>4:40am</td>
        </tr>
        <tr>
          <td>4:40am</td>
          <td>4:50am</td>
        </tr>
        <tr>
          <td>5:30am</td>
          <td>5:25am</td>
        </tr>
        <tr>
          <td>6:15am</td>
          <td>5:35am</td>
        </tr>
        <tr>
          <td>6:30am</td>
          <td>6:05am</td>
        </tr>
      </table>
     
    </div>
</div>
 
</div>
     </div>
</div>

            <div class="attendance">
              <div id="maincontent3">
              <p onclick="document.getElementById('id014').style.display='block'" class="txt" id="p3">Attendance Tracker</p>
                       <!--MODAL STARTS-->
      <div id="id014" class="modalreg" >
       <span onclick="document.getElementById('id014').style.display='none'" class="close" title="Close Form">&times;</span>
        <div class="modal-content">
         <div class="container">
           <h1 style="text-align:center;">Attendance Tracker</h1>
           <hr>
      
     
    </div>
</div>
 
</div>
            </div>
</div>


            <div class="vehicle">
              <div id="maincontent4">
              <p  onclick="document.getElementById('id015').style.display='block'" class="txt" id="p4">Vehicle Booking</p>
                        <!--MODAL STARTS-->
      <div id="id015" class="modalreg" >
       <span onclick="document.getElementById('id015').style.display='none'" class="close" title="Close Form">&times;</span>
        <div class="modal-content">
         <div class="container">
           <h1 style="text-align:center;">Vehicle Booking</h1>
           <hr>
      
     
    </div>
</div>
 
</div>
            </div>
</div>

        </div>
        <?php

include("config.php");

$tusername=$_SESSION['username'];
$sql="SELECT * FROM trainee WHERE punchno='$tusername' ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) 
?>
        <div class="profile">
          <div class="card">
            <img class="person" src="uploads/<?=$row['image']?>" alt="Theja" style="width:100%">
            <h1><?php echo $row['name']?></h1>
            <p class="title"><?php echo $row['dept']?> Department</p>
            <p><?php echo $row['college']?></p>
           <!-- <div style="margin: 24px 0;">
              <a  class="symbols" href="#"><i class="fa fa-dribbble"></i></a> 
              <a class="symbols" href="#"><i class="fa fa-twitter"></i></a>  
              <a class="symbols" href="#"><i class="fa fa-linkedin"></i></a>  
              <a class="symbols" href="#"><i class="fa fa-facebook"></i></a> 
            </div>-->
            <p><button class="btn"><?php echo $row['punchno']?></button></p>
          </div>
        </div>
        <div class="btns">
       <button onclick="document.getElementById('id01').style.display='block'" class="button-73" id="btn1"  role="button">Upload your Report</button></a>
        <div id="id01" class="modalreg" >
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Form">&times;</span>
            <form class="modal-content"  method="post"   enctype="multipart/form-data">
               <div class="container">
                   <h1 style="text-align:center;">Upload your Internship Report</h1>
                   <hr>
                   <div class="items" style="float:center;">
                  <img src="uploads/<?=$row['image']?>" alt="" class="pic" style="float:right;">
                 <div class="RRRIGHT" style="float:right;">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['username']?>" >

                    <label class="report LBL" for="report">Upload Here in PDF form :</label>

                    <input class="report" type="file" name="report" accept=".pdf"><br>
                    
                    
<?php 

if (isset($_POST['submit']) && isset($_FILES['report'])) {
	include "config.php";


	$img_name = $_FILES['report']['name'];
	$img_size = $_FILES['report']['size'];
	$tmp_name = $_FILES['report']['tmp_name'];
	$error = $_FILES['report']['error'];

	if ($error === 0) {
		if ($img_size > 602112) {
			echo '<script>alert("Sorry, your file is too large.")
			window.location.href="adminfirst.php"
			</script>';

		}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("pdf"); 

			if (in_array($img_ex_lc, $allowed_exs)) 
			{
				$new_img_name = uniqid("PDF-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$tusername=$_POST['id'];
               

				// Insert into Database
				$sql="UPDATE trainee set report='$new_img_name' WHERE punchno='$tusername' ";
                $result=mysqli_query($conn,$sql);
                if($result)
                    {
                      echo '<script>alert("File Uploaded Successfully!!!")
						window.location.href="first.php"
								</script>';
	                     echo "File Uploaded Successfully";
                        ?> <br>
<a download="<?php echo $new_img_name; ?>" href="uploads/<?php echo $new_img_name; ?>">Download: <?php echo $new_img_name; ?></a>
<?php
                    }
			}
			else {

		}
	}
}
	
	else {

	}


}
else 
{ 
  
}
?>
</div>
</div>

                   <input type="submit" class="rbtn btn1 .signupbtn" name="submit" value="Submit">
    
                </div>
                </form>
         </div>
  


         <a href="tfinal.php"> <button class="button-73" id="btn2" role="button">View Other Interns</button></a>
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