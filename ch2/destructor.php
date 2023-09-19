<?php
//class a lope lope loh p twrr yin lope 
class destructor{
    var $t=0;
    public function __construct(){
        echo "corgi";
    }
    public function loopIt(){
        for($i=0;$i<1000;$i++){
            $this->t +=$i;
        }
    }
    public function __destruct(){
        echo "shiba";        
    }
}
$obj=new destructor();
$obj->loopIt();
