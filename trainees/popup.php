<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="popup.css">
    <title>Document</title>
</head>
<body>
</div>
<a href="#" id="button" class="button" style="margin-left :40em;"> CLICK ME</a>
<div class="bg-modal">
  <div class="modal-content">
    <div class="close">+</div>
    <img src="image/thej.jpeg" alt="" class="pic">
    <form action="report.php">
        <label class="report LBL" for="report">Upload your Internship Report</label>

        <input class="report" type="file" name="report">
        <input type="submit" class="rbtn btn1" name="submit" value="Submit">
    </form>
    
  </div>
</div>
<script>
    document.getElementById('button').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display='flex';
    })
    document.querySelector('.close').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display='none';
    })
    </script>


</body>
</html>