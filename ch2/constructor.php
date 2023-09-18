<?php

class constructor{
    public function __construct($para1,$para2,$para3){
        echo "result is ".($para1+$para2+$para3);
    }
}
new constructor(20,30,40);