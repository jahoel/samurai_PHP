<?php
$file_list = [];
function add_list($name){
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}
add_list("kokonatu");
add_list("akoaki");
print_r($file_list);
?>