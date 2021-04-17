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
        $query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
        $stroka=$query->fetch_assoc();
        $query2 = mysqli_query($con, "SELECT * FROM ankets WHERE tag='disigner'");
        
    ?>
</head>
<body>

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
                   <h1 class="text">Disigners</h1>
                </div>
                <div class="col-4" style="height: 127px">
                
                </div>
                <div class="col-4" style="height: 127px">
                    <div class="row">
                        
                        <div class=" bg-dark col-5 mt-3 ml-3" style="height: 100px">
                             <form action="ankets.php" method="POST">
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;">EXIT</p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                            </form>
                        </div>
                        
                        <div class="col-5 bg-dark mt-3 ml-3" style="height: 100px">
                            
                                <p class="text mt-4" style="text-align: center; font-size: 30px;color: #E66640;"><?php echo $stroka['login']?></p>
                                <button class="col-12" style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>

                                                 
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 "  >
    	<div class="col-6 mx-auto "style="height: 500px;">
    		<div class="col-3 mx-auto ">
    			<img src="img/star.png">
    		</div>
    		<div>
    			<h1 class="text" style="text-align: center;color: #E66640">TOP</h1>
    		</div>
    		<div class="col-12 ">
    		<?php
                for($i=0;$i<mysqli_num_rows($query2);$i++){
                    $stroka2 = $query2->fetch_assoc();

            ?> 
                <div class="row mt-3" style="background: #E66640;">
                    <div class="col-1"style="background: #E66640; " >
                        
                    </div>
                    <div class="col-6">
                        <form action="proglist.php" method="POST">
                            <div class="row col-12  ">
                                <div class="col-10 ">
                                    <h1 class="text" style="text-align: center;color:black;"><?php echo $stroka2['name']?></h1>
                                    <input class="text" style="display: none" type="" name="userid" value="<?php echo $stroka2['userid']?>">
                                
                                </div>
                            
                            </div>
                        
                    </div>
                    <div class="col-5 ">
                        <button class="text" style="color: #E66640; background: black; font-size: 40px; ">Перейти на страницу</button>
                    </div>
                </form>

                </div>
            <?php }?>
    		</div>
    	</div>
    </div>

</div>

</div>
</body>
</html>