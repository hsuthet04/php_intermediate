<?php
require_once ('member.php');

$rp=new ReflectionProperty('App\member','detailInfo');

echo $rp->isPublic();
showData(get_class_methods($rp));

function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}