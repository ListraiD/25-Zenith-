<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<style type="text/css">
    .text{
        font-family: 'Press Start 2P', cursive;

    }
    


</style>
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
                            <form action="index.php" method="POST">
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;">EXIT</p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                            </form>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<div class="col-6 mx-auto" style="padding-top: 300px;">
			<h1 class="text" style="color:#E66640; text-align: center; ">войти в аккаунт</h1>
			<form action="check.php" method="POST">
				<input style="color:#E66640; background: black; "  class="form-control mt-3" type="" name="login" placeholder="login">
				<input style="color:#E66640; background: black; "  class="form-control mt-3" type="" name="password" placeholder="password">
				<button style="color:#E66640; background: black; " class="btn mt-3 text">войти</button>
			</form>
		</div>
	</div>
</body>
</html>