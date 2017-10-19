<?php
$select = "";
$select = $_GET['select'];
echo $select;
$myfile = fopen("select_fan.txt" , "w") or die("unable to open file");
fwrite($myfile, $select);
fclose($myfile);
?>