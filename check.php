<?php 
	session_start();

	$con = mysqli_connect('127.0.0.1', 'root', '', '40urokNM');
	$query = mysqli_query($con, "SELECT * FROM users");
	
	for($i=0; $i<mysqli_num_rows($query); $i++){
		$stroka = $query->fetch_assoc();
		if($_GET["name"]==$stroka["phone"] || $_GET["name"]==$stroka["email"]){
			$_SESSION["id"] = $stroka["id"];
			header("Location: account.php");
		}
	}	
?>