<?php
$myfile = fopen("mjk.txt", "w") or die("Unable to open file!");
$txt = "keshav\n";
fwrite($myfile, $txt);
$txt = "keshav \n";
fwrite($myfile, $txt);
fclose($myfile);
?>