<?php
// class human
// {
//     static $class_name ="human";
    
//     function init(){
//         $this->name ="大泉";
//     }
    
//     public function show(){
//         print($this->name."\n");
//     }
// }
// print(human::$class_name);
?>

<?php
class Human
{
    public static $str = null;
    public static $num = 0;
}

Human::$str = "Hello";
Human::$num = 42;

print(Human::$str."\n");
print(Human::$num);
?>