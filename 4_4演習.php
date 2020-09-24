<?php
$dic =["x"=> 10, "y"=> 20];
$dic["x"] = "30";
$dic["y"] = "40";
print($dic["x"])+($dic["y"]);
var_dump($dic);
?>