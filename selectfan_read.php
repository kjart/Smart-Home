<?php

$read_fan = fopen("select_fan.txt" , "r") or die("unable to open file");
$read = fread($read_fan,filesize("select_fan.txt"));
fclose($read_fan);
$value = array("Select" => $read );
$value = json_encode($value);
echo $value;
?>