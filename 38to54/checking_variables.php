<?php
//is_int()
//is_string()
//is_bol()
//is_null()
class index{
    public function showresult($num){
        if(is_bool($num)){
            echo "good to go<br>";
        }else{
            die("we need boolean");
        }
    }
}

$imd=new index();
$imd->showresult(true);