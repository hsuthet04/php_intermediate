<?php

class method_overloading{
    public function corgi($default){
        echo "i am 20"; 
    }
    // public function corgi(){
    //     echo "i am 30";
    // }
}
$obj=new method_overloading();
$obj->corgi(20);