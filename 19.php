<?php
echo"Keshav Gupta<br>";
$cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)   
);
for ($row = 0; $row < 3; $row++) {
    echo"<p><b> row number $row</b></p>";
    echo"<ul>";
    for ($col = 0; $col < 3; $col++){
        echo"<li>".$cars[$row][$col]."</li>";
    }
    echo"</ul>";
}
?>  