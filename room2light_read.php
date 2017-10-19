<?php

$room2_light = fopen("room2_light.txt" , "r") or die("unable to open file");
$read = fread($room2_light,filesize("room2_light.txt"));
fclose($room2_light);
$room2_fan = fopen("room2_fan.txt", "r") or die("unable to open file");
$read_fan = fread($room2_fan,filesize("room2_light.txt"));
fclose($room2_fan);
$value = array("status" => $read,"fan" => $read_fan );
$value = json_encode($value);
echo $value;
?>