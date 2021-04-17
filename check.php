<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon');
	$query = mysqli_query($con, "SELECT * FROM users WHERE  login='{$_POST['login']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['id'];
		header('location: main.php');
	}
	else{
		header('location: index.php');
	}
?>