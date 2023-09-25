<?php

class MyErrorClass extends Exception{

}
function myErrorHandler($erCode,$erMessage,$file,$lineNum){
    echo "error code is".$erCode."<br>";
    echo "error msg is".$erMessage."<br>";
    echo "error file is".$file."<br>";
    echo "error line num is".$lineNum."<br>";
    throw new MyErrorClass($erMessage,$erCode);
}

set_error_handler("myErrorHandler");

try{
    include "hello.php";
}catch(Exception $e){
    echo $e->getMessage();
}