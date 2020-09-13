<?php include 'mainpage.php'; ?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="register.css">
<script>
 
</script>
</head>

<body>

  <div class="container">
    <form style="max-width:500px;margin:auto" action="registrationProcess.php" method="POST">
      <h2 style="text-align: center">Register Form</h2>
      <div class="imgcontainer">
        <img src="OIP.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="rname"><b>Username</b></label>
        <input type="text" placeholder="Enter Fullname" name="rname" class="inputtext" id="fullname" required><br><br>

        <label for="remail"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="remail" class="inputtext" id="email" required><br><br>

        <label for="rpass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="rpass" class="inputtext" id="pass" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br>
                 <div class="inputtext" style="color: red;">Password format:(lower,upper,number,8)</div><br><br>

        <label for="rphno"><b>Mobile Number</b></label>
        <input type="password" placeholder="Enter Mobile number" name="rphno" class="inputtext" id="pass" required><br><br>


        <label for="role"><b>Role<b></label>
        <select name="role" id="role" class="inputtext">
          <option value="user">user</option>
          <option value="admin">admin</option>
        </select> <br><br>

        <button type="submit" name="submit">Register</button><br>
        
      </div>
    </form>


</body>

</html>


<?php
?>