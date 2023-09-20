<?php

class index{
    public function doit($var){
        // $i=0;
        // $sum=0;
        // while ($i<10){
        //     $sum+=$i;
        //     $i++;
        // }
        // $this->finish($sum);
        $this->$var("400");
    }
    public function finish($total){
        echo "all total is {$total}";
    }
    public function dog(){
        echo "u r dog";
    }
}
$ind=new index();
$ind->doit("finish");
$ind->doit("dog");
