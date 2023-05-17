<?php
$data = file_get_contents('json/sushi.json');
$restoran = json_decode($data, TRUE);
// var_dump($restoran);
echo $restoran['lokasi'];
?>