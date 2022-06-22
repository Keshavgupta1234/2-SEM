<?php
$file = fopen("1.txt","r+");
ftruncate($file,1);
fclose($file);
?>