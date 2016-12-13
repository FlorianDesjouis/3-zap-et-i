<?php
$genders_list = array();

$firstnames_list_string = "";

for($x = 0; $x < count($firstnames_list); $x++){
    $firstnames_list_string = $firstnames_list_string . $firstnames_list[$x] . ";";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gender-api.com/get?name=".$firstnames_list_string."&key=YMHXMYCajfacqKctcz");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
curl_close($ch);
$initialresult = json_decode($response);
$results = $initialresult->result;

for($n = 0; $n < count($results); $n++){
    $gender = $results[$n]->gender;
    array_push($genders_list, $gender);
}
