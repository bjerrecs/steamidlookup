<?php
//Get the SteamID from the form
$form_steamid = $_POST["sid"];

//include other files
include 'inc/apimaster.php';
include 'inc/staticvalues.php';
include 'inc/countryname.php';
include 'inc/nhl.php';
include 'inc/level.php';
include 'inc/rgames.php';

//set the steam profile url
$steamidurl = 'https://steamcommunity.com/profiles/' . $user_steamid;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
    <title>Steam API Exam Code</title>
</head>
<body style="color:#2b2b2b">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2" align="right" class="master" style="padding-top:40px">
            <img src="<?php echo $avatar;?>" alt="player" class="myImage" >
        </div>
        <div class="col-xl-8" style="padding-top:80px" align="left">
            <h1><?php echo $user_nick; ?></h1>
            <h2><?php echo $user_realname; ?></h2>
            <p>
            <?php
                //Display contry flag
                echo'<img src="img/';
                echo strtolower($user_country);
                echo '.png">';
            ?>
            <?php echo $fullctname;?>
            </p>
        </div>
        <div class="col-xl-2">

        </div>
    </div>
    <hr/>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">

            <div class="row" style="padding-top:25px;font-size:38px">
            <h2>Recently Used Nicknames</h2>
                <div class="col-md-6" style="font-size:12px;">

                    <?php
                        foreach($apiname_array as $item) {
                        echo $item['newname'];
                        echo '<br>';
                        }
                    ?>
                </div>
                <div class="col-md-6" style="font-size:12px;">
                    <?php
                        foreach($apiname_array as $item) {
                        echo $item['timechanged'];
                        echo '<br>';
                        }
                    ?>
                </div>
            </div>

        </div>
        <div class="col-md64" style="font-size:13spx">
            <h2 style="padding-top:25px;font-size:38px;">Account info</h2>
            <p>Community ID:<a href="<?php echo $steamidurl; ?>"target="_blank"> <?php echo $user_steamid; ?></a></p>
            <p>Custom URL: <a href="<?php echo $profileurl;?>" target="_black"> <?php echo $profileurl;?></a></p>
            <p>SteamID URL: <a href="<?php echo $steamidurl; ?>"target="_blank"><?php echo $steamidurl; ?></a></p>
        </div>
    </div>
</div>

<div align="center">
    <h2 style="padding-top:225px;font-size:38px;">Recently Played Games</h2>
        <img src="<?php echo $game_img_url1;?>" alt="Game 1" style="width:20%">
    <p><?php echo $game_name1;?></p>
        <img src="<?php echo $game_img_url2;?>" alt="Game 2" style="width:20%">
    <p><?php echo $game_name2;?></p>
        <img src="<?php echo $game_img_url3;?>" alt="Game 3" style="width:20%">
    <p><?php echo $game_name3;?></p>
</div>

<p style="padding-top:220px;text-align:center">Powered by <a href="https://steamcommunity.com/">Steam </a>, a registered trademark of Valve Corporation.</p>
</body>