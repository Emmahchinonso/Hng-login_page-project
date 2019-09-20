<?php
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <script src="app.js"></script>
</head>
<body>
  <section class="main">
    <header>
      <div style="display: flex; justify-content: space-between; width: 180px; align-items: center;">
        <p>Not Registered?</p>
        <button><a href="signup.html" class="header-btn">Sign Up</a></button>
      </div>
    </header>
    <form action="dashboard.php" method="POST">
      <div class="img" style="width: 120px; height: 120px; margin: 0 auto; position: relative; top: -40px; border-radius: 50%; background: brown;"></div>
      <p class="leo" style="color: white; font-size: 25px; text-align: center; position: relative; top: -20px;">LEO</p>
      <div class="username">
        <div class="input-icon">
          <span class="input-icon-span">
            <i class="fa fa-user"></i>
          </span>
        </div>
          
        <input type="email" id="email" name="email" placeholder="Email" required>
      </div>

      <div class="password">
        <div class="input-icon">
          <span class="input-icon-span">
            <i class="fa fa-lock"></i>
          </span>
        </div>

        <input type="password" id="password" name="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="password" required>
      </div>
  
      <div class="btn">
        <input type="submit" name = "submit" value="Login">
      </div>

      <div style="display: flex">
        <div class="checkbox" style="width: 200px; display: flex; justify-content: space-between">
          <input type="checkbox" name="checkbox" id="check" style="width: 60px;">
          <p style="width: 140px">Keep me Logged In</p>
        </div>

        <div class="forgot-password" style="width: 200px; text-align: center">
          <p>Forgot Password</p>
        </div>
      </div>
    </form>

    <footer>
      <div class="container">
        <div class="row">
          <!-- <p><a href="">About Us</a></p>
          <p><a href="">Privacy Policy</a></p>
          <p><a href="">Terms of Use</a></p> -->
          <p>Copyright © 2019, All rights reserved.</p>
          <p>Designed By Team Leo</p>
        </div>
      </div>
    </footer>
  </section>
</body>
</html>