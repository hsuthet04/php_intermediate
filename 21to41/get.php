<?php

class shiba{
    public function __get($var){
        echo "u r trying to get none exit property{$var}<hr>";
    }
    public function __set($var,$value){
        echo "u r trying to set none exit{$var}with value of {$value}<hr>";
    }
}
    $obj=new shiba();
    $obj->name="pucci";
    //echo $obj->name;//name ma tuu yin error ma tet ag GET ka lope
