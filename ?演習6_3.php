<?php
// function check($num){
//     if($num == 42){
//         print("Answer to the Ultimate Question of Life, the Universe, and Everything");
//     }
// }
// check(42);
// ?>

<?php
$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num, $odd_num;
    
    if($num % 2==0){
        array_push($even_num,$num);
        print("偶数");
    }else{
        array_push($odd_num,$num);
        print("奇数");
        
    }
}
sort_number(10);
?>