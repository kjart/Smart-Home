<?php

$room1_light = fopen("room1_light.txt" , "r") or die("unable to open file");
$read = fread($room1_light,filesize("room1_light.txt"));
fclose($room1_light);
$room1_fan = fopen("room1_fan.txt", "r") or die("unable to open file");
$read_fan = fread($room1_fan,filesize("room1_fan.txt"));
fclose($room1_fan);
/*   end of room1    */
$room2_light = fopen("room2_light.txt" , "r") or die("unable to open file");
$read2 = fread($room2_light,filesize("room2_light.txt"));
fclose($room2_light);
$room2_fan = fopen("room2_fan.txt", "r") or die("unable to open file");
$read2_fan = fread($room2_fan,filesize("room2_fan.txt"));
fclose($room2_fan);
/*   end of room2 */
/*$room3_light = fopen("room3_light.txt" , "r") or die("unable to open file");
$read3 = fread($room3_light,filesize("room3_light.txt"));
fclose($room3_light);
$room3_fan = fopen("room3_fan.txt", "r") or die("unable to open file");
$read3_fan = fread($room3_fan,filesize("room3_fan.txt"));
fclose($room3_fan);*/
// the security light
$security = fopen("security_light.txt", "r") or die("unable to open file");
$security_read = fread($security,filesize("security_light.txt"));
fclose($security);
//the water reading
$water = fopen("water.txt" , "r") or die("unable to open file");
$water_read = fread($water,filesize("water.txt"));
fclose($water);
//this allows us to choose either a manual or automatic method of controlling a fan
$read_fanSelect = fopen("select_fan.txt" , "r") or die("unable to open file");
$readFan = fread($read_fanSelect,filesize("select_fan.txt"));
fclose($read_fanSelect);
$value = array("Room1Light" => $read,"Room1Fan" => $read_fan, "Room2Light" => $read2, "Room2Fan" => $read2_fan ,
					"security_light" => $security_read, "water" => $water_read, "Select" => $readFan);
$value = json_encode($value);
echo $value;
?>


