
<?php 

if (isset($_POST['register']) && isset($_FILES['image'])) {
	include "config.php";

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	if ($error === 0) {
		if ($img_size > 602112) {
			echo '<script>alert("Sorry, your file is too large.")
			window.location.href="adminfirst.php"
			</script>';

		}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) 
			{
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$username=$_POST['pname'];
                $password=$_POST['psw'];
                $name=$_POST['name'];
                $mobile=$_POST['mob'];
                $referedby=$_POST['rname'];
                $college=$_POST['cname'];
                $branch=$_POST['branch'];
                $place=$_POST['place'];
                $dept=$_POST['dept'];
                $joinedon=$_POST['date'];

				// Insert into Database
				$sql="INSERT INTO trainee(punchno,password,name,mobile, referedby,college,branch,place,dept,joinedon,image) VALUES('$username', '$password','$name', '$mobile', '$referedby','$college','$branch','$place','$dept','$joinedon','$new_img_name')";
                $result=mysqli_query($conn,$sql);
                if($result)
                    {
	                     echo '<script>alert("Trainee Registered Succesfully")
	                    window.location.href="adminfirst.php"
			            </script>';

                    }
			}
			else {
				echo '<script>alert("You cannot upload files of this type")
				window.location.href="adminfirst.php"
				</script>';

		}
	}
}
	
	else {
		echo '<script>alert("unknown error occurred!")
		window.location.href="adminfirst.php"
		</script>';

	}


}
else 
{
	echo '<script>alert("Could not complete your registration due to some error")
	window.location.href="adminfirst.php"
	</script>';

}