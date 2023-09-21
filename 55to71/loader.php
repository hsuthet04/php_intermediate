<?php

class loader{
    public static function loader($classname){
        require_once $classname.".php";
    }
}