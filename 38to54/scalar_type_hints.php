<?php

class index{
    public function showresult(string $num){
        var_dump($num);
    }
}
$ind=new index();
$ind->showresult("aaaa");