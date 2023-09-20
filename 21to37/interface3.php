<?php

require_once "sheinter.php";
require_once "heinter.php";

class index{

        private $data;
        
        public function shegotoschool($data){
            $this->data=$data;
        }
        public function hegotoschool($data){
            $this->data=$data;
        }
        public function outPut(){
           
            echo "<pre>".print_r($this->data,true)."</pre>";
        }
        public function busy(){
            echo count($this->data);
        }
            
        
}
$obj=new index();
$sheary=["book","pencil","knife","stick"];
$heary=["book","pencil","food","bag"];
$obj->shegotoschool($sheary);
$obj->outPut();
$obj->busy();

$bb=new index();
$bb->hegotoschool($heary);
$bb->outPut();
$obj->busy();