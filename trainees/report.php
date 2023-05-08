
<?php 

if (isset($_POST['submit']) && isset($_FILES['report'])) {
	include "config.php";

	echo "<pre>";
	print_r($_FILES['report']);
	echo "</pre>";

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
						echo '<script>alert("You are Logged in")
						window.location.href="first.php"
								</script>';

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
