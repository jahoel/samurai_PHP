<?php
$data = [
    "name"=>"尾原",
    "gender"=>"男性",
    "age"=>24
    ];
    $data['address'] = "東京";
    $data['gender'] = "女性";
    $data['children'] = ["子供1","子供2","子供3"];
    print($data["name"]);
    print($data["gender"]);
    print($data["age"]);
    print($data["address"]);
    var_dump($data);
    var_dump($data['children']);
?>