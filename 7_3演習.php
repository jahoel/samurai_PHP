<?php
// for ($i =1; $i <31; $i++) {
//     print($i."\n");
// }
?>

<?php
for ($i = 1; $i < 51; $i++) {
    if($i % 5 ==0){
        print("Buzz"."\n");
    }elseif($i % 3 ==0){
        print("Fizz"."!\n");
    }elseif($i % 15 ==0) {
        print("FizzBuzz");
    }else{
        print($i."\n");
    }
}
?>