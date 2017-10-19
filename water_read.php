<?php

$water = fopen("water.txt" , "r") or die("unable to open file");
$water_read = fread($water,filesize("water.txt"));
fclose($water);
$value = array("status" => $water_read);
$value = json_encode($value);
echo $value;
?>