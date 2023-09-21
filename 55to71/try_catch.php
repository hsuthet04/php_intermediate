<?php
//try ka aung myin lope
//catch ka a mhrr ko htote

error_reporting(0);//error ma pw ag
try{
   if( fopen('ttt.txt','r')){
        echo "success";
   }else{
        throw new Exception("file can't be read");
   }
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<br>hee hee";//mhnn mhnn ma mhnn mhnn a lote lote
}
