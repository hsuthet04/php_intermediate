<?php
//??left side ko ayin a lote lote,pya tha nr shi yin right ko lote
function doit(...$var){
    echo $var[0] ?? "hehee";
}
//doit();
doit("one");