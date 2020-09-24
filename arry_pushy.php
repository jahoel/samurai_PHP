// <?php
// $customers = ["侍太郎","侍　次郎","侍 三郎"];
// foreach($customers as $customer) {
//     print($customer."<br>");
// }

// var_dump($customers);

// echo "<pre>";
// print_r($customers);
// echo "</pre>";

// $data = [
//     "name"=>"大泉",
//     "gender"=>"男性",
//     "age"=>46
// ];

// $data = [
//     "name"=>"大泉",
//     "gender"=>"男性",
//     "age"=>46
// ];

// $data['children'] = ["太郎", "次郎", "三郎"];

// echo "<pre>";
// var_dump($data);
// echo "</pre>";



function add_list($name){
    $file_list = [];
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}

add_list("function");
add_list("test1");
add_list("test2");

echo "<pre>";
print_r($file_list);
echo "</pre>";
// var_dump($file_list);














?>