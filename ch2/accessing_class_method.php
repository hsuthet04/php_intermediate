<?php

class accessing_class_method{
    var $name="froggy";
    public function froggy($name){
        echo "i am froggy".$name;
    }
}
$obj=new accessing_class_method();
$obj->froggy("hello mf");
echo "<br>".$obj->name;