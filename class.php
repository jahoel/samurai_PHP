<?php
class car
{
    static $class_name ="car";
    
    function init(){
        $this->name ="";
    }
    
    public function show(){
        print($this->name."\n");
    }
}
$car = new car();
$car->name = "セダン";
$car->show();
print(Car::$class_name);

?>