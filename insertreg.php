<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon');
		$query = mysqli_query($con, "INSERT INTO users (login, password)
							VALUES ('{$_POST['login']}', '{$_POST['password']}')");
		header('location: index.php');
		
?>