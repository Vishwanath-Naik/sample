
<?php
include("config.php");
error_reporting(0);
session_start();
if(isset($_SESSION["username"]))
{
  header('Location:welcome.php');
}
if (isset($_POST["register"]))
{
  $username=mysqli_real_escape_string($conn,$_POST["username"]);
  $name=mysqli_real_escape_string($conn,$_POST["name"]);
  $department=mysqli_real_escape_string($conn,$_POST["department"]);
  $college=mysqli_real_escape_string($conn,$_POST["college"]);
  $date=mysqli_real_escape_string($conn,$_POST["date"]);
  $place=mysqli_real_escape_string($conn,$_POST["place"]);
  $mobileno=mysqli_real_escape_string($conn,$_POST["mobilenumber"]);
  $refferedby=mysqli_real_escape_string($conn,$_POST["refferedby"]);
  $email=mysqli_real_escape_string($conn,$_POST["email"]);
  $password=mysqli_real_escape_string($conn,md5($_POST["password"]));
  $cpassword=mysqli_real_escape_string($conn,md5($_POST["cpassword"]));
  $check_email=mysqli_num_rows(mysqli_query($conn,"SELECT Email FROM traineedeatils where Email='$email'"));
  $check_username=mysqli_num_rows(mysqli_query($conn,"SELECT username FROM traineedeatils where username='$username'"));
  if($password !== $cpassword)
  {
    echo "<script>alert('password did not matched ');</script>";

  }
  elseif($check_email>0)
  {
    echo "<script>alert('email already exist in the database');</script>";
  }
  elseif($check_username>0)
  {
    echo "<script>alert('user already exist in the database');</script>";
  }
  else
  {
    if(isset($_FILES["image"]))
    {
      $image_name=$_FILES['image']['name'];
      $image_tmp_name=$_FILES['image']['tmp_name'];
      $image_size=$_FILES['image']['size'];
      $image_new_name=rand().$image_name;

      if($image_size>5242880)
      {
        echo "<script>alert('photo size is large!! max size is 5MB ');</script>";
      }
      else
      {
        $sql="INSERT INTO `users`(`username`, `Name`, `Department`, `Collage`, `date_of_join`, `place`, `mobileno`, `refferedby`, `Email`, `password`,`image`) VALUES ('$username','$name','$department','$college','$date','$place','$mobileno','$refferedby','$email','$password','$image_new_name')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $_POST["username"]="";
            $_POST["name"]="";
            $_POST["dapartment"]="";
            $_POST["college"]="";
            $_POST["date"]="";
            $_POST["place"]="";
            $_POST["mobilenumber"]="";
            $_POST["refferedby"]="";
            $_POST["email"]="";
            $_POST["password"]="";
            $_POST["cpassword"]="";
            $_POST["image"]="";
            echo "<script>alert('User Registration Successful');</script>";
            move_uploaded_file($image_tmp_name,"uploads/".$image_new_name);
        }
        else
        {
            echo "<script>alert('User Registration failed');</script>";
        }
      }  
    }   
  }
}
if (isset($_POST["login"]))
{
  $username=mysqli_real_escape_string($conn,$_POST["signin-username"]);
  $password=mysqli_real_escape_string($conn,md5($_POST["signin-password"]));
  $check_username=mysqli_query($conn,"SELECT username FROM users where username='$username' AND password='$password'");

  if(mysqli_num_rows($check_username)>0)
  {
    $row=mysqli_fetch_assoc($check_username);
    $_SESSION["username"]=$row['username'];
    header('Location:welcome.php');
  }
  else
  {
    echo "<script>alert('login details is incorrect!!.Please Try again.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in & Register Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="number" placeholder="Username" name="signin-username" value=<?php echo $_POST['signin-username'] ;?>required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="signin-password"value=<?php echo $_POST['signin-password'] ;?> required/>
            </div>
            <input type="submit" value="Login" name="login" class="btn solid" />
           
          </form>
          <form action="#" class="sign-up-form" method="post" enctype="multipart/form-data" autocomplete="off" >
            <h2 class="title">Registration</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="number" placeholder="Username" name="username" value="<?php echo $_POST["username"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" placeholder="Name" name="name" value="<?php echo $_POST["name"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-building"></i>
              <input type="text" placeholder="Department" name="department" value="<?php echo $_POST["department"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-university"></i>
              <input type="text" placeholder="College" name="college" value="<?php echo $_POST["college"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-calendar"></i>
              <input type="date" name="date" placeholder="DD/MM/YYYY"  title="Enter the joining date in this format YYYY-MM-DD" value="<?php echo $_POST["date"];?>"/>           
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker"></i>
              <input type="text" placeholder="Place" name="place" value="<?php echo $_POST["place"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-mobile"></i>
              <input type="number" placeholder="mobile number" name="mobilenumber"value="<?php echo $_POST["mobilenumber"];?> "required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Reffered by" name="refferedby"value="<?php echo $_POST["refferedby"];?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email"  name="email" value="<?php echo $_POST["email"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"value="<?php echo $_POST["password"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $_POST["cpassword"];?>"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="file" placeholder="image" name="image" accept="image/*">
            </div> 
            <input type="submit" class="btn" name="register" value="Register" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Register as trainee below
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Register
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Sign in as trainee
            </p>
            <button class="btn transparent" id="sign-in-btn" action="first.html">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>