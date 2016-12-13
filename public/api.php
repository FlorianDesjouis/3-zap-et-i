<?php
    if(isset($_GET["nb"])){
        $nb_users = $_GET["nb"];
        if(is_nan($nb_users)){
            http_response_code(400);
            die("400 Bad Request: Parameter nb is of invalid type.");
        }
        if($nb_users > 50 || $nb_users < 1){
            http_response_code(403);
            die("403 Forbidden: Parameter nb is too low or too high.");
        }
    }
    else{
        http_response_code(418);
        die("418 I'm a teapot: Parameter nb is missing.");
    }

    require("../models/api1.php");
    require("../models/api2.php");
    require("../models/api3.php");

$finalArray = array();
for($y = 0; $y < $nb_users; $y++){
    if(!isset($names_list[$y])){
        $names_list[$y] = "unknown";
    }
    if(!isset($images_list[$y])){
        $images_list[$y] = "unknown";
    }
    if(!isset($genders_list[$y])){
        $genders_list[$y] = "unknown";
    }
    array_push($finalArray, array("name" => $names_list[$y], "image" => $images_list[$y], "gender" => $genders_list[$y]));
}

http_response_code(200);
echo(json_encode($finalArray));
