<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>


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
        <div class="modal-content">
         <div class="container">
           <h1 style="text-align:center;">Bus Timings</h1>
           <hr>
       
     
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