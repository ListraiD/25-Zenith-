<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
	<?php
        $con = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
        $query = mysqli_query($con, "SELECT * FROM ankets WHERE userid='{$_SESSION['id']}'");
        $stroka=$query->fetch_assoc();
        $query2 = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
        $stroka2=$query2->fetch_assoc();
    ?>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style type="text/css">
	.text{
		font-family: 'Press Start 2P', cursive;

	}
	


</style>
<body>
<div style="background-image: url(img/bg.jpg); height: 1200px">
	
    <div class="col-12 " style="height: 127px; ">
            <div class="row">
                <div class="col-4 mt-3" style="height: 127px;">
                   <h1 class="text">СТРАНИЦА ПОЛЬЗОВАТЕЛЯ</h1>
                </div>
                <div class="col-4" style="height: 127px">
                
                </div>
                <div class="col-4" style="height: 127px">
                    <div class="row">
                        
                        <div class=" col-5 mt-3 ml-3" >
                             
                        </div>
                        
                        <div class=" bg-dark col-5 mt-3 ml-3" style="height: 100px">
                             <form action="main.php" method="POST">
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;">EXIT</p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
	<div class="  col-12 pt-5 " >
		<div class="row">
			<div class="col-6 mt-2">
				<div class="row">
					<div class="" style="width: 200px; height: 200px;">
						<img style="height: 200px; width: 200px;" src="img/ava.png">

					</div>
					<div class="col-6">
						<div class="">
							<h1 class="text" style="text-align: center; color: #E3643E; font-size: 20px">имя</h1>
							<div style="background: black">
								<h1 class="text" style="color: #E3643E; font-size: 30px"><?php echo $stroka['name']?></h1>
							</div>	
							
							<h1 class="text" style="text-align: center; color: #E3643E; font-size: 20px">роль во команде</h1>
							<div style="background: black">
								<h1 class="text" style="color: #E3643E"><?php echo $stroka['tag']?></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 bg-12" style="height: 100px;  ">
					<div class="row">
						
						<div class="col-5 ml-3" style="background:#E3643E; height: 100px;"> ">
							<h1 class="text" style="color:black; font-size:20px; text-align: center; ">
								порядочность:
							</h1>
							<h1 class="text" style="text-align: center; font-size:30px ; ">10000</h1>
						</div>
						<div class="col-3 ml-3" style="background:#E3643E; height: 100px;"> ">
							<h1 class="text" style="color:black; font-size:20px; text-align: center; ">
								отзывы:
							</h1>
							<h1 class="text" style="text-align: center; font-size:20px ; ">10000</h1>
						</div>
						<div class="col-2" style="background:#E3643E; height: 100px; margin-left: 35px"> ">
							<h1 class="text" style="color:black; font-size:20px ; text-align: center; ">
								уровень:
							</h1>
							<h1 class="text" style="text-align: center; font-size:30px ; ">10000</h1>
						</div>
					</div>
				</div>
				<div class=" col-11 bg-12 mt-2" style="height: 300px; background:#E66640; ">
					<p class="text" style="color:black;font-size:25px ; ">
						<?php echo $stroka['descr']?>
					</p>
				</div>
				<div class="col-11 mt-2" style=" background:#E66640; ">
					<p class="text" style="color:black; font-size:25px ; ">
						<?php echo $stroka['tools']?>  
							
					</p>
				</div>
				

			</div>
			<div class="col-5 mt-2 border"style="border: 4px double #E66640; background: black; padding: 10px">
				<p class="text" style="color:#E66640; font-size:30px ; ">

						Я виртуальный помощник призванный помочь вам научиться пользоваться нашим сайтом. 
						Мое Имя Астра Нобель. 
						Я мастерски владею всеми доступными на данный момент программами и буду рада помочь вам ответом на ваш вопрос. Мне можно задавать множ... 
							
				</p>

			</div>
		</div>
	</div>
</div>	

</body>
</html>