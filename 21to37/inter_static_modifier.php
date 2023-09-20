<?php

class index{
    private static $count=0;

    public function getCount(){
        self::$count++;
        echo self::$count."<br>";
        
    }
}
$obj=new index();
$obj->getCount();
$obj->getCount();
$obj->getCount();