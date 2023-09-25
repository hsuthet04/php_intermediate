<?php

class MyCustomException extends Exception{
    public function __construct($message,$code){
        parent::__construct($message,$code);
        echo "error up<br>";
    }
}
function rfile($file){
    if(!file_exists($file)){
        throw new MyCustomException("file not found",1001);
    }
}try{
    rfile("hello.txt");
}catch(Exception $e){
    echo $e->getMessage();
}