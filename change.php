<?php 
	session_start();

	$img_dir = "img/";
	$img_name = $img_dir . basename($_FILES["avatarka"]["name"]);
	$upload = move_uploaded_file($_FILES["avatarka"]["tmp_name"], $img_name);

	$connect = mysqli_connect('127.0.0.1', 'root', '', '40urokNM');
	$query = mysqli_query($connect, "UPDATE users SET avatar = '{$img_name}' WHERE id='{$_SESSION['id']}'");
	header("Location: account.php")
?>