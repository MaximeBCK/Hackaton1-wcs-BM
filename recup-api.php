<?php

$url = 'https://api.spacexdata.com/v3/missions';

$raw = file_get_contents($url);


$json = json_decode($raw);

var_dump($json);


$nomMission3 = $json[3]->payload_ids;
$wikipediaLiens1 = $json[8]->wikipedia;


echo '<br>';
echo $wikipediaLiens1;


foreach ($nomMission3 as $key => $missions3)
{
    echo '<li>'. $missions3 .'</li>';
}


function cvf_convert_object_to_array($data) {

    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    }
    else {
        return $data;
    }
}

?>

