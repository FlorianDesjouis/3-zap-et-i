<?php 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/?results=".$nb_users."&inc=name");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);

//var_dump($ch);

$nameJson = json_decode($ch);

$nameJson = $nameJson->results;

//var_dump($nameJson);

$names_list = array();