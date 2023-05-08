
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
    <title>Sign in Form</title>
  </head>
  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="./traineelogin.php" class="sign-in-form" method="POST">
            <h2 class="title">Trainee Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="tusername" required >
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="tpassword" required>
            </div>
            <input type="submit" value="Login" name="login" class="btn solid" />
           
          </form>
          <form action="adminlogin.php" class="sign-up-form" method="post" enctype="multipart/form-data" autocomplete="off" >
            <h2 class="title">Admin Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="ausername" required >
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="apassword" required>
            </div>
            <input type="submit" value="Login" name="login" class="btn solid" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>Admin ?</h2>
            <p>
              Login as admin
            </p>
            <button class="btn transparent" id="sign-up-btn">
             Login
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h2>One of us ?</h2>
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