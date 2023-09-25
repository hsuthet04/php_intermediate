<?php

class MyCustomException extends Exception{
    public function __construct($message,$code){
        parent::__construct($message,$code);
       $handler=fopen("log.txt",'a');
       $data="error message=> \n ".$message."\n error no=> \n ".
       $code."\n error timestamp \n".date("Y-m-d H:m:s",time());
       fwrite($handler,$data);
       fclose($handler);
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