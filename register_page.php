<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style2.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="registration.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" required name="u_name" >
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" required name="u_email" >
      </div>
      <div class="input-box">
        <input type="number" placeholder="Enter phone number" required name="u_number" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required name="u_pass" >
      </div>
      <!-- <div class="input-box">
        <input type="password" placeholder="Confirm password" required name="u1_pass" >
      </div> -->
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login_page.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>