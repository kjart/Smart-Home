<?php
$light = "";
$light = $_GET['light'];
echo $light;
$myfile = fopen("room1_light.txt" , "w") or die("unable to open file");
fwrite($myfile, $light);
fclose($myfile);
?>