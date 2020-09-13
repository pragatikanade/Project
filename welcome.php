<?php
  session_start();
  if(isset($_COOKIE['email'])) $_SESSION['sname'] = $_COOKIE['email'];
  if(!isset($_SESSION['sname'])) header("Location:login.php");
  $name=$_SESSION['sname'];
  
 include 'welcome_article.php'; ?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script type="text/javascript">
            window.history.forward();
            function noBack()
            {
                window.history.forward();
            }
        </script>
    </head>
<body>
  <fieldset style="width: 100px;height: 100px;">
    <form action="welcomeprocess.php" method="POST" style="padding: 20px;">

  <h3 style="color: blue;">Welcome  <mark><?php echo $name; ?></mark></h3>
    <div class="container" style="border: 2px solid pink;display: inline-block; box-shadow: 10px 10px 5px pink;
"><br>
                 <div>
                    <button type="submit" class="btn btn-primary" name="article">Create Article</button><br><br>
                    </div>
  </div>

    </form>
</fieldset>
</body>
</html>


