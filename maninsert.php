<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon');
		$query = mysqli_query($con, "INSERT INTO manager (userid, img)
							VALUES ('{$_SESSION['id']}', '{$_POST['img']}')");
	header('location: creat2.php');
		
		
?>