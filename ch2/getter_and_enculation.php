<?php

//private ko class a pyin ka ny access lope loh ma ya
class getter_and_enculation{
    private $name="Corgi";
    public function getter(){
        return $this->name;
    }
    
    
}
$obj=new getter_and_enculation();
    echo $obj->getter();

