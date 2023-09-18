<?php

class setter_getter{
    private $name="chihwahwa";
    public function setter($data){
        $this->name=$data;
    }
    public function getter(){
        return $this->name;
    }
}
$obj= new setter_getter();
$obj->setter("husky");
echo $obj->getter();