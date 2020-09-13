<?php

    $hostname="localhost";
	$username="admin";
	$password="admin";
    $databasename="crud_project";

	$mysqli=new mysqli($hostname,$username,$password,$databasename)or die(mysqli_error($mysqli));
    

?>
