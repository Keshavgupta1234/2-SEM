<?php
$i=10;
echo"Keshav Gupta <br>";
if($i==0){
    echo"1 equals to 0";
}
else if ($i==1){
    echo"1 equals to 1";
}
else if ($i==2){
    echo"1 equals to 2";
}
switch($i){
    case 0:
    echo"i equal to 0";  
break;
case 1:
    echo"i equals to 1";
    break;
    case 2;
    echo"i equals to 2";
    break;
    default;
    echo"default value: Wrong output";
}
?>
