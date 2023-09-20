<?php

function doit(...$var){
    echo $var[2][3];
   

}
doit(["one","two","three"],"hee",[1,2,3,4]);
