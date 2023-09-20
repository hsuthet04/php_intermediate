<?php

class test{

}
class index{
    public function showresult(test $num){
        var_dump($num);
    }
}

$i=new test();
$ind=new index();
$ind->showresult($i);