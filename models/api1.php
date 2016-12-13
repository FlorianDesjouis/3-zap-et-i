<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/?results=".$nb_users."&inc=name");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
curl_close($ch);

$nameJson = json_decode($response);

$nameJson = $nameJson->results;

var_dump($nameJson);

$names_list = array();
