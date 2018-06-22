<?php
$url = 'https://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key=0E2A2883CF4B7E220056DFC9A965AF2B&steamid=';
$api_url = $url . $user_steamid . '&format=json';

//Converts JSON to array
$api_json = file_get_contents($api_url);
$game_array = json_decode($api_json, true);

$game_appid1 = $game_array['response']['games'][0]['appid'];
$game_name1 = $game_array['response']['games'][0]['name'];
$game_img_id1 = $game_array['response']['games'][0]['img_logo_url'];
$game_img_url1 = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/' . $game_appid1 . '/' . $game_img_id1 . '.jpg';

$game_appid2 = $game_array['response']['games'][1]['appid'];
$game_name2 = $game_array['response']['games'][1]['name'];
$game_img_id2 = $game_array['response']['games'][1]['img_logo_url'];
$game_img_url2 = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/' . $game_appid2 . '/' . $game_img_id2 . '.jpg';

$game_appid3 = $game_array['response']['games'][2]['appid'];
$game_name3 = $game_array['response']['games'][2]['name'];
$game_img_id3 = $game_array['response']['games'][2]['img_logo_url'];
$game_img_url3 = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/apps/' . $game_appid3 . '/' . $game_img_id3 . '.jpg';
?>