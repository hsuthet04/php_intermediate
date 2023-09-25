<?php

require_once "database/DAL.php";

class index{
   
    public function __construct(){
        //$db=new DBGen();
        //$db=DBGen::getInstance()->getConn();
        $dal=new DAL();
        //$dal->getSingleShop(1);
        //$dal->getAllShops(1);
        //$dal->singleShopInsert("cookie","192.168.0.108","cookie","123",1);
        $shops=[
            ["crab","192.168.0.108","crab","123",1],
            ["bbq","192.168.0.109","bbq","123",1],
            ["donuts","192.168.0.110","donuts","123",1]
        ];
        //$dal->multipleShopInsert($shops);
        //$dal->updateShop(2,"seafood");
        //$dal->deleteShop(11);
        $dal->JoinData(1);
    }
}
new index;