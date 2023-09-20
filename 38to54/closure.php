<?php
//use()global variable ko access lote loh ya
$num=20;

$var=function()use($num){
    echo "i am closure{$num}<hr>";
};
$var();

function doit($var){
    $var();
}
doit(function()use($num){
    echo $num;
});