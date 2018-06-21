<?php
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

?>