<?php
require_once ('member.php');

$rm=new ReflectionMethod('App\member','getDetailInfo');

$mem=new App\member();
$rm->invoke($mem,['123']);

echo $rm->isPublic() ? "public <br>":"not public<br>";
echo "<hr>";
showData(get_class_methods($rm));
function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";
}