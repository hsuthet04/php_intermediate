<?php

class index{
    public static $count=0;

    public static function showme(){
        echo self::doit();
    }
    public static function doit(){
        echo "hee hee";
    } 
}
index::showme();