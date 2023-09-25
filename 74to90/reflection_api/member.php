<?php

namespace App;

class member{
    private $isAuth=false;
    private $detailInfo=[
        "name"=>"ethu",
        "age"=>20,
        "school"=>"tharkayta"
    ];
    public function __construct(){
        
    }
    // public function getDetailInfo($args){
    //     echo "invoked <br>".$args[0]."<br>";
    // }
    public function getDetailInfo(string $data,$info){
        return $this->detailInfo;
    }
    public function setAuth($bol){
        $this->isAuth=$bol;
    }
    public function getAuth(){
        return $this->isAuth;
    }
}