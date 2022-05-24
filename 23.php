<?php
echo"Keshav Gupta<br>";
    $arr=array("Keshav"=>"18","Deepanshu"=>17, "bro"=>"3");
    krsort($arr);
    foreach($arr as $x=>$x_value)
    {
        echo "key=".$x.",value=".$x_value;
        echo"<br>";
}
?>