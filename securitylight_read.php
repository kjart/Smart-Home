<?php

$security_file = fopen("security_light.txt" , "r") or die("unable to open file");
$read = fread($security_file,filesize("security_light.txt"));
fclose($security_file);
if($read == "OFF"){
	$read = "ON";
}
else{
	$read ="OFF";
}
$myfile = fopen("security_light.txt" , "w") or die("unable to open file");
fwrite($myfile, $read);
fclose($myfile);
$value = array("status" => $read);
$value = json_encode($value);
echo $value;
?>