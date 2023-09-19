<?php

class one{
    public function className(){
        return __CLASS__;
    }
    public function getClassName(){
        echo static::className();
    }
}

class two extends one{
    public function className(){
        return __CLASS__;
    }
}
$one=new one();
$one->getClassName();
echo "<hr>";
$two=new two();
$two->getClassName();