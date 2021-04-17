<?php
session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root','','hackathon');
		$query = mysqli_query($con, "INSERT INTO ankets (descr, tools, userid, tag, name)
							VALUES ('{$_POST['decr']}','{$_POST['tools']}','{$_SESSION['id']}', '{$_POST['tag']}', '{$_POST['name']}' )");
	header('location: main.php');
		
		
?>
