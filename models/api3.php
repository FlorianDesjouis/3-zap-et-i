<?php
$genders_list = new Array();

$firstnames_list_string = new String();

for($x = 0; $x < count($firstnames_list); $x++){
    $firstnames_list_string = $firstnames_list_string . $firstnames_list[$x] . ",";
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gender-api.com/get?name=".$firstnames_list_string."&key=YMHXMYCajfacqKctcz");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
curl_close($ch);

$results = json_decode($response);

for($n = 0; $n < count($results); $n++){
    $gender = $results[$n]->gender;
    array_push($genders_list, $gender);
}
