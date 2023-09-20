<?php
//include_once("ch2/constructor.php");

$ary=["one"=>1,"two"=>2,"three"=>3,"four"=>4];

// foreach($ary as $key=>$val){
//     echo $key."->".$val;
// }

var_dump($ary);
echo "<hr>".$ary["one"];
echo "<hr>";

$obj=(object)$ary;
var_dump($obj);

echo "<hr>".$obj->one;