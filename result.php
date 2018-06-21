<?php
//////////////////////////
// Steam API CODE       //
// Made my Simon Bjerre //
// MIT Licens           //
//////////////////////////


//Get the SteamID from the form
$SteamId = $_POST["sid"];

//Loads the api urls and assign a class to them
$api_urldefault = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=0E2A2883CF4B7E220056DFC9A965AF2B&steamids=';
$api_url = $api_urldefault . $SteamId;


//Converts JSON to array
$api_json = file_get_contents($api_url);
$api_array = json_decode($api_json, true);


//////////////////////
//Set Static Values //
//////////////////////

//SteamID64
$user_steamid = $api_array['response']['players'][0]['steamid'];
//current Nickname
$user_nick = $api_array['response']['players'][0]['personaname'];
//Full Name
$user_realname = $api_array['response']['players'][0]['realname'];
//Current Display Contry
$user_country = $api_array['response']['players'][0]['loccountrycode'];
//Current Avatar
$avatar = $api_array['response']['players'][0]['avatarfull'];
//Current profileurl / Custom URL
$profileurl = $api_array['response']['players'][0]['profileurl'];


//////////////////////////////////////////
//Convert SteamID64 in to SteamID URL   //
//////////////////////////////////////////
$steamidurl = 'https://steamcommunity.com/profiles/' . $user_steamid;


//////////////////////////////
//Nickname History Lookup   //
//////////////////////////////

//Gets the profile url from jSON
$profile_url = $api_array['response']['players'][0]['profileurl'];
//var for the base URL
$api_urlname = 'https://steamcommunity.com/profiles/';
//String operator to add the SteamID64 and /ajaxaliases
$profile_url_final = $api_urlname . $user_steamid . '/ajaxaliases';
//Converts JSON to array
$apiname_json = file_get_contents($profile_url_final);
$apiname_array = json_decode($apiname_json, true);
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
     <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
    <style>
    /*This removes link styleing and makes it white*/
    a {
        color: white;
    }
        a:link {
        text-decoration: none;
        color: #ddd;
    }
    a:visited {
        text-decoration: none;
        color: #ddd;
    }
    a:hover {
        text-decoration: none;
        color: #ddd;
    }
    a:active {
        text-decoration: none;
        color: #ddd;
    }
    </style>
    <title>Steam API Exam Code</title>
</head>
<body style="background-color: #384a68;color:#fff">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3" align="right" class="master" style="padding-top:40px">
            <img src="<?php echo $avatar;?>" alt="player" class="myImage" >
        </div>
        <div class="col-xl-9" style="padding-top:80px" align="left" >
            <h1><?php echo $user_nick; ?></h1>
            <h2><?php echo $user_realname; ?></h2>
            <?php echo $user_country ?>
        </div>
    </div>
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

<p style="padding-top:220px;text-align:center">Powered by <a href="https://steamcommunity.com/">Steam </a>, a registered trademark of Valve Corporation.</p>
</body>