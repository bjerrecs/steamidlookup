<?php

//////////////////////////////
//Contrycode to full name   //
//////////////////////////////
$ct_url = 'https://restcountries.eu/rest/v2/alpha/';
$ct_json_url = $ct_url . $user_country ;

//Converts JSON to array
$ct_json = file_get_contents($ct_json_url);
$ct_array = json_decode($ct_json, true);

//Full contry name
$fullctname = $ct_array['name']

?>