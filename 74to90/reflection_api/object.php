<?php
require_once ('member.php');

$member=new App\member();
$ro=new ReflectionObject($member);

echo $ro->getName();
echo "<hr>";
showData(get_class_methods($ro));

function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}