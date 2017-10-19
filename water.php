<?php
$water = "";
$water = $_GET['water'];
echo $water;
$myfile = fopen("water.txt" , "w") or die("unable to open file");
fwrite($myfile, $water);
fclose($myfile);
?>