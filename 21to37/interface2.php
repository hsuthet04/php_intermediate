<?php

interface inter{
    public function setWeapon($weapon);
}
class index implements inter{
    private $weapon;
    public function setWeapon($weapon){
        $this->weapon=$weapon;
    }
    public function killNow(){
        echo "killing enermy with ".$this->weapon;
    }
}
$obj=new index();
$obj->setWeapon("stick");
$obj->killNow();