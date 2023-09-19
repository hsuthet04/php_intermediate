<?php

class shiba{
    public function __isset($name){
        echo "u r trying check the set or not of {$name} property<hr>";
    }
    public function __unset($name){
        echo "u r trying check the unset or not of {$name} property";
    }
}
$obj=new shiba();
isset($obj->shiba);
unset($obj->corgi);