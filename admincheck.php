<?php include 'mainpage.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <form style="max-width:500px;margin:auto" action="admincheckprocess.php" method="POST">
      <h2 style="text-align: center">Admin Form</h2>
      <div class="imgcontainer">
        <img src="OIP.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="admin_name" class="inputtext" id="email" required><br><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="admin_pass" class="inputtext" id="pass" required><br><br>

        </select>      

        <button type="submit" name="login">Login</button><br>
      </div>
    </form>
</body>
</html>