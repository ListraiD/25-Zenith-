<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style type="text/css">
	.text{
		font-family: 'Press Start 2P', cursive;

	}
	


</style>
<head>
	<title></title>
	<?php
        $con = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
        $query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
        $stroka=$query->fetch_assoc();
    ?>
</head>
<body>

	
<div style="background-image: url(img/bg.jpg); height: ">
	<div class="col-12 " style="height: 127px; ">
            <div class="row">
                <div class="col-4 " style="height: 127px">
                	
                </div>
                <div class="col-4" style="height: 127px">
                
                </div>
                <div class="col-4" style="height: 127px">
                    <div class="row">
                        
                        <div class=" bg-dark col-5 mt-3 ml-3" style="height: 100px">
                             <form action="main.php" method="POST">
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;">EXIT</p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                            </form>
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
    <div>
    	<div class="row">
	    	<div class="col-2 mt-5 r">
	    		<div class="col-12" style="border: 4px double #E66640; background: black; padding: 10px">
	    			<h1 class="text" style="text-align: center; font-size: 40px;color: #E66640;"> Random Tip</h1>
	    		</div>
	    		
	    			<div>
			    		<nav class="navbar navbar-light ">
		  					<form class="form-inline">
		  						<div class="mx-auto col-12" style="height: 500px; background:#E76640; ">
		  							<h1 class="text" style=" font-size: 20px;color: black;">SERCH USERS</h1> 
		  							<div class="row">
		  								<div style="background: black; height: 40px ">
		  									<img src="img/lupa.png">
		  								</div>
		  								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  							</div>
		    					</div>
		  					</form>
						</nav>
					</div>
					
				
	    	</div>
	    	<div class="col-10 mt-5" style="height: ; background: ; ">
				<div class="col-12" style="height: 200px; background:#E76640">
					<h1 class="text" style=" font-size: 30px;color: black;">В этом разделе вы можете найти себе команду, среди программистов менеджеров и дизайнеров, выбирайте пользователей осторожно, не передавайте никому свои личные данные.</h1>
				</div>
				<div class="row">
					<div class="col-12 mt-3" >
						<div class="row">
							<div class="col-3">
								<img src="img/teambord.png">
							</div>
							
											
							<div class="col-4 mx-auto">
								<form action="proglist2.php" method="POST">
									<div style="border: 4px double #E66640; background: ; padding: 10px" class="col-12 ">
										<img src="img/programmer2.png">
									</div>
									<button class="col-12" style="position: absolute; left:0px;top:0px; height: 150px; opacity: 0;"></button>
								</form>
								<form action="manlist2.php" method="POST">
									<div style="border: 4px double #E66640; background: ; padding: 10px" class="col-12 mt-3">
										<img src="img/man2.png">
										<button class="col-12" style="position: absolute; left:0px;top:0px; height: 150px; opacity: 0;"></button>
									</div>
								</form>
								<form action="dislist2.php" method="POST">
									<div style="border: 4px double #E66640; background: ; padding: 10px" class="col-12 mt-3">
										<img src="img/dis2.png">
										<button class="col-12" style="position: absolute; left:0px;top:0px; height: 150px; opacity: 0;"></button>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>	
			</div>
		</div>
		
    </div> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
	

</body>
</html>