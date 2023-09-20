<?php
//abstract method ty ka body ma pr
//abstract method mr abstract class shi ya ml
//overwrite lope ya ml
//variable,constant yw ya

abstract class parents{
    const DB_HOST="local host";
    public $name="ethu";

    public abstract function star();

    public abstract function hoshi();

    public function cloud(){
        echo "i am cloud<hr>";
    }
}

class index extends parents{
    public function star(){
        echo "i am star<hr>";
    }
    public function hoshi(){
        echo "i am hoshi<hr>";
    }
    public function cloud(){
        echo "i am cloud";
    }
}
$imd=new index();
$imd->star();
$imd->hoshi();
$imd->cloud();
