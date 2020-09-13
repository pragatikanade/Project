<?php

// including the connection file
include 'connection.php';

$lemail=$_POST['lname'];
$lpassword=$_POST['lpsw'];
$rem=$_POST['remember'];

  if(isset($_POST['login']))
  {
      
  $query =$mysqli->query("SELECT * FROM register_information WHERE uname_db='$lemail' AND upassword_db='$lpassword'");

  if(mysqli_num_rows($query)==1)
  {
    if(isset($_POST['remember']))
    {
      setcookie('email',$lemail,time()+60*60*7);
      // setcookie('pass',$lpassword,time()+60*60*7);

    }

    // echo 'Welcome'.$lemail;
    session_start();
    $_SESSION['sname']=$_POST['lname']; 
    
    header("Location:welcome.php");
  }else
  {
     header("Location:login.php");

  }
  $mysqli->close();
}
  else{
  header("Location:login.php");
  }
?>
