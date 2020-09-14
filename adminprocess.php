<?php
session_start();
include 'connection.php';

$id = 0;
$title = "";
$name = "";
$desc = "";

//Code for Delete option.
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM article WHERE id=$id ") or die(mysqli_error($mysqli));
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	header("Location:admin.php");
}

//Code for Edit option
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;

	$result = $mysqli->query("SELECT * FROM article WHERE id=$id") or die(mysqli_error($mysqli));
	$row = $result->fetch_array();

	$title = $row['title_db'];
	$desc = $row['des_db'];
	$name = $row['name_db'];
}

//After editing data we need to save it on click of Update
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$title = $_POST['atitle'];
	$name = $_POST['aname'];
	$desc = $_POST['adescription'];

	$mysqli->query("UPDATE article SET title_db='$title',name_db='$name',des_db='$desc' WHERE id=$id ") or die(mysqli_error($mysqli));

	$_SESSION['message'] = "Record has been Updated!";
	$_SESSION['msg_type'] = "warning";

	header("Location:admin.php");
}
$mysqli->close();
