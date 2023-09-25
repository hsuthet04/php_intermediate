<?php

class helperr{
    private $name;

    public function __construct($name){
        $this->name=$name;
    }
    public function urname(){
        echo "ur name is".$this->name."<hr>";
    }
}