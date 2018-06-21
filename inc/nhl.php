<?php

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

?>