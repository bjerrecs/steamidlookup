<?php

//Loads the api urls and assign a class to them
$api_urldefault = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=0E2A2883CF4B7E220056DFC9A965AF2B&steamids=';
$api_url = $api_urldefault . $form_steamid;

//Converts JSON to array
$api_json = file_get_contents($api_url);
$api_array = json_decode($api_json, true);

?>