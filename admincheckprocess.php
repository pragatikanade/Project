<?php
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];

include 'connection.php';
if(isset($_POST['login']))
  {
      $role="admin";
  $query =$mysqli->query("SELECT * FROM register_information WHERE uname_db='$admin_name' 
  AND db_role='$role'AND upassword_db='$admin_pass'");
  //echo $query;

    if(mysqli_num_rows($query)==1)
    {
        session_start();
        $_SESSION['admin_name']=$_POST['admin_name']; 
        header("Location:admin.php");
    }else
    {
        header("Location:admincheck.php");
    }
}else{
    header("Location:login.php");
}
