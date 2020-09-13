<?php
include 'mainpage.php';
session_start();
if (isset($_COOKIE['email'])) {
  header("Location:welcome.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>
  <div class="container">
    <form style="max-width:500px;margin:auto" action="loginprocess.php" method="POST">
      <h2 style="text-align: center">Login Form</h2>
      <div class="imgcontainer">
        <img src="OIP.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="lname" class="inputtext" id="email" required><br><br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="lpsw" class="inputtext" id="pass" required><br><br>

        <label for="remember"><b>Remember Me:</b></label>
        <input type="checkbox" name="remember" value="1"><br><br>


        <button type="submit" name="login">Login</button><br>
      </div>

      <!-- <b>If NOT Registered.. Please Click REGISTER:</b><br>
      <b>
        <h3>
          <?php //echo "<a href='mainpage.php'>BACK</a>"; ?>
        </h3>
      </b> -->


    </form>

</body>

</html>