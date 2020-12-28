<?php 
	session_start();

	$connect = mysqli_connect('127.0.0.1', 'root', '', '40urokNM');
	$query = mysqli_query($connect, "DELETE FROM new WHERE newsID='{$_SESSION['id']}'");
	header("Location: account.php");
?>