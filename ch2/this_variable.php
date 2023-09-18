<?php

//this=function call lope tk object

class this_variable{
    public $name="husky";

    public function chgName(){
        $this->name="shiba";
    }
}

$obj=new this_variable();
$obj->chgName();
echo $obj->name."<br>";

$bb=new this_variable();
echo $bb->name;