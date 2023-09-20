<?php

$num=20;
$ary=["1"=>"one","2"=>"two","3"=>"three"];

array_walk($ary,function($val,$key)use(&$num){
    $num=++$num;
    echo "key is ".$key."value is ".$val."current value is {$num}<hr>";
});