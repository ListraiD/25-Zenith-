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
        $query2 = mysqli_query($con, "SELECT * FROM ankets WHERE userid='{$_SESSION['id']}' ");
        $stroka2=$query2->fetch_assoc();


    
?>
<head>
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
        <div class="col-6 mx-auto" >
            <h1 class="text" style="color:#E66640; text-align: center;">Заполни анкету аккаунта</h1>
            <form action="creatinsert.php" method="POST">
                <h1 class="text" style="color:#E66640; text-align: center;">ваше имя </h1> 
                <textarea name="name" class="form-control bg-dark border-" style="height: 50px; color:#E66640; font-size: 20px;"></textarea>
                <h1 class="text" style="color:#E66640; text-align: center;">Напиши о себе </h1>
                <textarea name="decr" class="form-control bg-dark border-" style="height: 200px; color:#E66640; font-size: 20px;"></textarea>
                <h1 class="text" style="color:#E66640; text-align: center;">инструменты которыми вы пользуетесь </h1> 
                <textarea  name="tools" class="form-control bg-dark border-" style="height: 200px; color:#E66640; font-size: 20px;"></textarea>
                <h1 class="text" style="color:#E66640; text-align: center;">какая ваша роль в команде </h1> 
                <textarea  name="tag" class="form-control bg-dark border-" style="height: 50px; color:#E66640; font-size: 20px;"></textarea>
          


                

                <button style="background: black; color:#E66640;" class="btn mt-3 text">заполнить</button>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
