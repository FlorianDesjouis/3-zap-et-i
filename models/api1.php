<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/?results=".$nb_users."&inc=name");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
curl_close($ch);

$nameJson = json_decode($response);

$results = $nameJson->results;

var_dump($results);

$names_list = array();
$firstnames_list = array();

for ($i = 0; $i < count($results); $i++) {
    array_push($names_list, $results[$i]->name->first.' '.$results[$i]->name->last);
    array_push($firstnames_list, $results[$i]->name->first);
}

var_dump($names_list);
var_dump($firstnames_list);