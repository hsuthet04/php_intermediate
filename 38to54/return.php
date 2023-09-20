<?php

class test{

}
class best{
    
    }

class index{
    public function showresult(test $num){
        var_dump($num);
    }
}
$id=new test();
$bc=new best();
$ind=new index();

$ind->showresult($id);
