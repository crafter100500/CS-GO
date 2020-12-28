<?php 
	session_start();

	$connect = mysqli_connect('127.0.0.1', 'root', '', '40urokNM');
	$query = mysqli_query($connect, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
	$stroka = $query->fetch_assoc();
?>
<meta charset="utf-8">
<form action="update.php" method="POST">
	<input type="" name="name" value="<?php echo $stroka['name']?>" placeholder="name">
	<input type="" name="surname" value="<?php echo $stroka['surname']?>" placeholder="surname">
	<input type="" name="password" value="<?php echo $stroka['password']?>" placeholder="password">
	<button>CHANGE</button>
</form>