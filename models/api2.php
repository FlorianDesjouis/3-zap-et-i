<?php
$images_list = new Array();
for($n = 0; $n < count($names_list); $n++){
    $image_url = "https://robohash.org/".$names_list[$n];
    array_push($images_list, $images_url);
}
