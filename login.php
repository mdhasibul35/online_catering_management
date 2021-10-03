<?php

/*session_start();
if(!isset($SESSION['login']))
{
  echo "sorry ! account exist already";
}*/

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Catering Management System</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="one.css">
   <link rel="stylesheet" type="text/css" href="footer.css">

</head>
<body>
  <header>
    <div class="head">
    
            <h2>Catering</h2>
        </div>
    <nav>
      <ul>
        <li> <a href="one.php" class="active">Home</a></li>
        <li> <a href="aboutus.php">About us</a></li>
                <li> <a href="Packages.php">Packages</a></li>
                <li> <a href="offers.php">Offers</a></li>
                            <li> <a href="login.php">Login</a></li>
                <li> <a href="#">order</a></li>
      </ul>
      
    </nav>
  </header>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Log in</label>
    <div class="login-form">

      <form class="sign-in-htm" action="store.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input  name="username" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input  name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <label for="cellno" class="labe1">Contact no</label>
          <input  name="cell_no" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Address</label>
          <input  name="address" type="password" class="input" data-type="password" required>
        </div>
       
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        
        
      </form>




      <form class="sign-up-htm" action="confirm.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input  name="username" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input  name="password" type="password" class="input" data-type="password" required>
        </div>
       
        <div class="group">
          <input type="submit" class="button" value="Login" name="log">
        </div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
 
      </form>
    </div>
  </div>
</div>
 
  
</body>
</html>


<!-- <?php 
//unset($_SESSION['login']);
?>
 -->