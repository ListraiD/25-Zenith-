<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style type="text/css">
	.text{
		font-family: 'Press Start 2P', cursive;

	}
	


</style>
<html>
	<?php
        $con = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
        $query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}' ");
        $stroka=$query->fetch_assoc();


    
    ?>
<head>
	<title></title>
</head>
<body>
	<div style="background-image: url(img/bg.jpg); height: 2000px; width: 1920px;">
		<div class="col-12 " style="height: 127px; ">
            <div class="row">
                <div class="col-4 " style="height: 127px">
                    
                </div>
                <div class="col-4" style="height: 127px">
                                    </div>
                <div class="col-4" style="height: 127px">
                    <div class="row">
                        
                        <div class=" col-5 mt-3 ml-3" style="height: 100px">
                            
                        </div>
                        
                        <div class="col-5 bg-dark mt-3 ml-3" style="height: 100px">
                            <form action="login.php" method="POST">
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;"><?php echo $stroka['login']?></p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                            </form>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="border col-12 mt-5" >
			<div class="col-6 mx-auto">
				<h1 class="text" style="color:#E66640; text-align: center;"> кем вы являетесь ?</h1>
			</div>
			<div class="col-6 mx-auto border">
				<div class="" style="margin-left: 100px;">
					<img src="img/programmer.png">
					<form action="proginsert.php" method="POST">
						<button class="mt-5 text" style="color: #E66640; height: 40px; background: black; ">выбрать</button>
						<input style="display: none" type="" name="img" value="programmer">
					</form>
				</div>
			</div>
			<div class="col-6 mx-auto border mt-5">
				<div class="" style="margin-left: 100px;">
					<img src="img/m2.png">
					<form action="maninsert.php" method="POST">
						<button class="mt-5" style="color: #E66640; height: 40px; background: black; ">выбрать</button>
						<input style="display: none" type="" name="img" value="manager">

					</form>
				</div>
			</div>
			<div class="col-6 mx-auto border mt-5">
				<div class="" style="margin-left: 100px;">
					<img src="img/d2.png" method="POST">
					<form action="dinsert.php">
						<button class="mt-5" style="color: #E66640; height: 40px; background: black; ">выбрать</button>
						<input style="display: none" type="" name="img" value="disagner">
					</form>
				</div>
			</div>

		</div>
	</div>

	<!--<form action="main.php">
		<button>назад</button>
	</form>
	<form action="insertacc.php" method="POST">
		<input class="form-control mt-3" type="" name="fio" placeholder="Фамилия Имя Отчество" >
		<input class="form-control mt-3" type="" name="descr" placeholder="descr">
		<button class="btn btn-info mt-3">публиковать</button>

		<input class="form-control mt-3" type="" name="tags" placeholder="tags" >
		<div class="col-6 mx-auto">
			<h1 style="text-align: center;">выбери свой путь</h1>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="img/program.png" style="height: 300px;">
				<input style="position: absolute; display: none;" class="form-control mt-3" type="" name="tags" placeholder="программист" value="программист" >
			</div>
			<div class="col-4">
				<img src="img/d.png" style="height: 300px;">
				<input style="position: absolute; display: none; " class="form-control mt-3" type="" name="tags" placeholder="дизайнер" value="дизайнер" >
			</div >
			<div class="col-4">
				<img src="img/m.png" style="height: 300px;">
				<input style="position: absolute; display: none;" class="form-control mt-3" type="" name="tags" placeholder="менеджер" value="менеджер" >
			</div>
		</div>
	</form>
	-->
</body>
</html>
