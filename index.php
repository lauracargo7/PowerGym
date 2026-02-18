<?php
    session_start();
    include_once('functions/functions.php');
    $dbConnect = dbLink();
    if($dbConnect){
    echo '<!-- Connection established -->' ;
    }
    
    //print_r($_SESSION);
    if($_GET['logout'] == 'logout'){
        $_SESSION['uname'] = NULL;
        $_SESSION['password'] = NULL;
        $_SESSION['position'] = NULL;
        $_SESSION['validate'] = NULL;
        $_SESSION['userid'] = NULL;

        session_destroy();
        session_regenerate_id();

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerGym</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header" ><h1>Welcome to PowerGym!<h1>
        
    </div>

        <?php display_Navigation('index');
        ?>

        <div class="cta">

            <div class="infoandlogo">
                <img src="images/logo-pg.png" style="width: 20em; ">

                <div class="p1">At PowerGym, your transformation starts today. We offer a motivating and supportive environment where every workout brings you closer to your best self.<br><br> With state-of-the-art facilities and a team of expert trainers, we are here to help you reach your goals, whether it's gaining strength, improving endurance, or just living a healthier lifestyle.
                </div>
            </div>

            <div class="form1">
                <p> Are you a member?</p>
                <form class="form2" action="pages/dashboard.php" method="post">
                    <input type="text" name="uname" placeholder="Enter Username">
                    <input type="password" name="pwd" placeholder="Enter Password"><br>
                    <select name="position">
                        <option value="clients">Client</option>
                        <option value="trainers">Trainer</option><br>
                <input type="submit" value="Login"><br>
                </form>
            </div>
        </div>    
    
        <div class="footer">
            <div></div>
            <div class="links">
                <a href="about.php"> About Us </a><br>
                <a href="about.php"> Our policy </a><br>
                <a href="index.php"> Log in </a><br>
            </div>
            
            <div class="media-buttons">
                <a href="#" class="tiktok-button"></a>
                <a href="#" class="insta-button"></a>
            </div>
            <div></div>
        </div>

</body>
</html>