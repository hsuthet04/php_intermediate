<?php

$ary=["1"=>"one","2"=>"two","3"=>"three"];

function corgi($val,$key){
    echo "key is ".$key."value is ".$val."<hr>";
}
array_walk($ary,"corgi");//para 2ku//first para ka split lope tr//second ka arrange pyn lote