<?php

class index{
    public function __toString(){
        return "this class has no properties or methods<hr>";
    }
    public function __invoke(){
        echo "u r trying to call object as method";
    }
    public function __clone(){
        echo "u r cloning me";
    }
}
$obj=new index();
$a=clone $obj;
