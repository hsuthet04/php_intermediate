<?php

function doit($para1,$para2,$para3){
    $total=$para1+$para2;
    $para3($total);
}
$haha=function($var){
    echo "i am heehee{$var}";
};
doit(3,2,$haha);//para1,para2,para3

// function doit($var1,$var2,$var3){
//     $total=$varl+$var2;
//     $var($total);
// }
// doit(3,2,function($var){
//     echo "i am haha {$var}";
// });