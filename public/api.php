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
