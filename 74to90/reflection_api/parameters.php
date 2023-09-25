<?php

require_once ('member.php');
$rp=new ReflectionParameter(['App\member','getDetailInfo'],0);

echo $rp->getType()."<hr>";
showData(get_class_methods($rp));

function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}