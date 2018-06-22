<?php

$URL = 'https://api.steampowered.com/IPlayerService/GetSteamLevel/v1/?key=0E2A2883CF4B7E220056DFC9A965AF2B&steamid=';
$api_url = $api_urldefault . $form_steamid;

//Converts JSON to array
$api_json = file_get_contents($URL);
$level_array = json_decode($api_json, true);
$playerlevel = $level_array['response']['player_level'];
?>