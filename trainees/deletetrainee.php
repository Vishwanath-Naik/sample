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
    <link rel="stylesheet" href="deletetrainee.css">
    <link rel="stylesheet" href="fonts.css">
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
<div class="dtable" style="align-items: center !important;">
        <table>
       

	<tr>

		<th>Punch Card No.</th>

		<th>Name</th>

		<th>Department</th>

		<th>Place</th>

		<th>College</th>

        <th>Report</th>

        <th>Action</th>

	</tr>
    <?php

include("config.php");
$quariy = mysqli_query($conn,"select * from trainee");
while ( $row = mysqli_fetch_array($quariy) ) :

?>

	<tr>

		<td><?php echo $row['punchno']?></td>

		<td><?php echo $row['name']?></td>

		<td><?php echo $row['dept']?></td>

		<td><?php echo $row['place']?></td>

		<td><?php echo $row['college']?></td>

        <td><a download="<?php echo $row['report'] ?>" href="uploads/<?php echo $row['report'] ?>">Download: <?php echo  $row['report']; ?></a></td>

        <form action="validatedelete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['punchno']?>" >
            <td> 
                <input type="submit" class="dlt" name="delete" value="DELETE">
</td>


        </form>


	</tr>
    <?php
endwhile;
?>
</table>
</div>
</body>
</html>