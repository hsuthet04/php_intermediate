<?php
function myFileRead($file){
    if(file_exists($file)){
        $handler=fopen($file,'r');
        $size=filesize($file);
        $data=fread($handler,$size);

        echo $data;
    }else{
        throw new Exception("not exits");
    }
        
}
try{
    myFileRead("hello.txt");
}catch(Exception $e){
    echo $e->getMessage();
}