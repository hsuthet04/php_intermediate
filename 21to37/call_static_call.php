<?php

class chihwahwa{
    public function __call($method,$values){
        echo "u r trying to call method {$method}with values of <hr>";
        echo "<pre>".print_r($values)."</pre>";
    }
    public static function __callStatic($name,$arguments){
        echo "u r calling none exit static method{$name}with parameters of<hr>";
        echo "<pre>".print_r($arguments,true)."</pre>";
    }
}
chihwahwa::dog("chihwahwa","shiba");