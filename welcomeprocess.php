<?php

	// if(isset($_POST['home']))
	// {
	// 	session_start();
	// 	$_SESSION['shome']=$_POST['home'];
	// 	header("Location:homepage.php");
	// }
	if(isset($_POST['article']))
	{
		session_start();
  		$_SESSION['sarticle']=$_POST['article'];
		header("Location:index.php");
	}
	else{
		header("Location:welcome.php");
	}

 ?>

