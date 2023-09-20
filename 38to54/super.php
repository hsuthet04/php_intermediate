<?php

interface tinker{
    public function mustover();
}
class dd{
    public function namedd(){
        echo "his name is alien";
    }
}
class mysuper extends dd implements tinker{
    public function showsuper(){
        echo __CLASS__;
    }
    public function mustover(){
        echo "i am star";
    }
}
class hee{
    public $hee="HEHE";
}
class cat extends mysuper{

}
$cat=new cat();
$cat->mustover();