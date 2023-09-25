<?php
require_once ('member.php');

$member=new App\member();

$rc=new ReflectionClass('App\member');

echo $rc->getName()."<br>";

showData(get_class_methods($rc));

function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}