<?php

class one{
    public static $name="nga pyuu";
    
    public static function authorName(){
        return self::$name;
        //return static::$name;
    }
    public static function getAuthorName(){
        echo static::authorName();
    }
}
class two extends one{
    public static function authorName(){
        return self::$name."and ethu";
        //return static::$name."and ethu";
    }   
}
one::getAuthorName();
echo "<hr>";
two::getAuthorName();