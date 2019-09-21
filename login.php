<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LEO|LOGIN</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <script src="app.js"></script>
  <link rel="stylesheet" type="text/css" href="font/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/538faed953.js"></script>
</head>
<body>
  <section class="main">
    <header>
      <div style="display: flex; justify-content: space-between; width: 180px; align-items: center;">
        <p>Not Registered?</p>
        <button class="btn"><a href="signup.php" class="btn">Sign Up</a></button>
      </div>
    </header>
    <form action="">
        <img src="images/lion.jpg" alt="" class="img" style="width: 120px; height: 120px; margin: 0 auto; position: relative; top: -40px; border-radius: 50%; background: brown;">
      <p class="leo" style="color: white; font-size: 25px; text-align: center; position: relative; top: -20px;">LE</span><i class="fa fa-globe fa-spin" style="color:#e82323;"></i><span class="center"></span></p>
      <form action="process.php" method="post">
      <div class="username">
        <div class="input-icon">
          <span class="input-icon-span">
            <i class="fa fa-user"></i>
          </span>
        </div>
          
        <input type="text" id="email" name="email" placeholder="Email" required>
      </div>

      <div class="password">
        <div class="input-icon">
          <span class="input-icon-span">
            <i class="fa fa-lock"></i>
          </span>
        </div>

        <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="password" required>
      </div>
  
      <div class="btn">
        <input type="submit" value="Login">
      </div>
      </form>

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
