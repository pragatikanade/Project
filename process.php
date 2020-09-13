<?php

session_start();
// including the connection file
include 'connection.php';

if(!isset($_SESSION['sarticle']))
  {
  	header("Location:welcome.php");
 }

$id=0;
$title="";
$name="";
$desc="";
$update=false;

//Create article form coding on click of save.
if(isset($_POST['save']))
{
	$title=$_POST['atitle'];
	// $name=$_POST['aname'];
	  $name=$_SESSION['sname'];
	  echo $name;

	$description=$_POST['adescription'];

	$sql="INSERT INTO article (title_db,name_db,des_db) VALUES('$title','$name','$description')";
	$mysqli->query($sql)or die(mysqli_error($mysqli));

	$_SESSION['message']="Record has been saved!";
	$_SESSION['msg_type']="success";

	header("Location:index.php");

}

//Code for Delete option.
if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM article WHERE id=$id ")or die(mysqli_error($mysqli));


	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";

	header("Location:index.php");


}

//Code for Edit option
if(isset($_GET['edit']))
{
  	$name=$_SESSION['sname'];

	$id=$_GET['edit'];
	$update=true;

	$result=$mysqli->query("SELECT * FROM article WHERE name_db='$name' AND id=$id")or die(mysqli_error($mysqli));
	// print_r($result);
	 
 	$row=$result->fetch_array();
 	// print_r($row);
 	//var_dump($row);
 		 $title=$row['title_db'];
 		 //var_dump($title);
 		$desc=$row['des_db'];
 		//var_dump($desc);



 	//if(count($result) == 1)
 	//{
 		 //$id=$row['id'];
 		 //$title=$row['title_db'];
 		//$name=$row['name_db'];
 		//$desc=$row['des_db'];
 	//	echo "hi";
 	//}
 }

//After editing data we need to save it on click of Update
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$title=$_POST['atitle'];
	$name=$_POST['aname'];
	$desc=$_POST['adescription'];

$mysqli->query("UPDATE article SET title_db='$title',name_db='$name',des_db='$desc' WHERE id=$id ")or die(mysqli_error($mysqli));

	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";

	header("Location:index.php");

}
$mysqli->close();
?>
