<?php

class index{
        public function __sleep(){
            echo "u r trying to serialize my object<hr>";
            return [];
        }
        public function __wakeup(){
            echo "u r trying to unserialize my object";
        }

}
$obj=new index();
$a=serialize($obj);
$a=unserialize($a);