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
<head>

    <title></title>
    <?php
        $con = mysqli_connect('127.0.0.1', 'root', '', 'hackathon');
        $query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}' ");
        $stroka=$query->fetch_assoc();


    
    ?>

    

</head>
<body>
    <div style="background-image: url(img/bg.jpg); height: 1200px; width: 1920px;">
        <!-- head-->
        
        <!-- head-->
        <div class="col-12 " style="height: 127px; ">
            <div class="row">
                <div class="col-4 " style="height: 127px">
                    
                </div>
                <div class="col-4" style="height: 127px">
                                    </div>
                <div class="col-4" style="height: 127px">
                    <div class="row">
                        
                        <div class=" bg-dark col-5 mt-3 ml-3" style="height: 100px">
                             <form action="index.php" method="POST">
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
        <div class="col-12  mt-3" style="height: 1000px;">
            <div class="row">
                <div class="col-4" style="height: 1000px;">
                    <form action="account.php">
                        <div class="col-12 " style="height: 200px;">
                            <img src="img/user.png">
                            <button class="col-12" style="position: absolute; left:0px;top:0px; height: 200px; opacity: 0;"></button>
                        </div>

                    </form>
                    <form style="margin-top: 250px;" action="creat2.php">
                        <div class="col-12 " style="height: 200px;">
                            <img src="img/insert.png">
                            <button class="col-12" style="position: absolute; left:0px;top:0px; height: 200px; opacity: 0;"></button>
                        </div>

                    </form>
                </div>
                <div class="col-4 " style="height: 1000px;">
                    <img style="margin-left: 50px" src="img/main.png">
                </div>
                <div class="col-4 " style="height: 1000px;">
                    <form action="ankets.php">
                        <div class="col-12 " style="height: 200px;">
                            <img src="img/team.png">
                            <button class="col-12" style="position: absolute; left:0px;top:0px; height: 200px; opacity: 0;"></button>
                        </div>

                    </form>
                    <form style="margin-top: 250px;" action="task.php">
                        <div class="col-12 " style="height: 200px;">
                            <img src="img/tasks.png">
                            <button class="col-12" style="position: absolute; left:0px;top:0px; height: 200px; opacity: 0;"></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
        


</body>
</html>