
<?php
$security_light = "OFF";
$security_file = fopen("security_light.txt" , "w") or die("unable to open file");
fwrite($security_file, $security_light);
fclose($security_file);
?>
