<?php include 'mainpage.php';
session_start();
include 'connection.php';
$uemail = $_POST['remail'];
$query = $mysqli->query("SELECT * FROM register_information WHERE uemail_db='$lemail'");

if ($query) {
	echo "wrong";
	}
?>

<html>
<head></head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		//storing values in variables fom registration form which you enter.
		$uname = $_POST['rname'];
		$upassword = $_POST['rpass'];
		$uphnumber = $_POST['rphno'];
		$role = $_POST['role'];
		$sql = $mysqli->query("INSERT INTO register_information (uname_db,uemail_db,upassword_db,uphnumber_db,db_role) VALUES('$uname','$uemail','$upassword','$uphnumber','$role')");
		if ($sql) {
			header("Location:displaymsg.php"); //Redirecting page on condition
		} else {
			header("Location:registration.php");
		}
	}

	?>

</body>

</html>