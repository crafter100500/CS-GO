<?php 
	session_start();

	$connect = mysqli_connect('127.0.0.1', 'root', '', '40urokNM');
	$query = mysqli_query($connect, "UPDATE users SET name='".$_POST["name"]."', surname='".$_POST["surname"]."', password='".$_POST["password"]."' WHERE id='{$_SESSION['id']}'");
	header("Location: account.php");
?>