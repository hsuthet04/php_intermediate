<?php

require_once "vendor/autoload.php";
class index{
    public function __construct(){
        $start=new start();
        $start->saystart();

        $home=new home();
        $home->sayhome();

        $filter=new filter();
        $filter->sayfilter();

        $helper=new helper();
        $helper->sayhelper();
        
        $end=new end();
        $end->sayend();
    }
}
new index();
