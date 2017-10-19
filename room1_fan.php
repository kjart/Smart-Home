<?php
$fan = "";
$fan = $_GET['fan'];
echo $fan;
$myfile = fopen("room1_fan.txt" , "w") or die("unable to open file");
fwrite($myfile, $fan);
fclose($myfile);
?>