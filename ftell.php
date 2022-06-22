<?php



$file = fopen("get.txt","r");
echo fgets($file);


echo fseek($file,15);
echo ftell($file);
echo fpassthru($file);
echo ftell($file);



?>