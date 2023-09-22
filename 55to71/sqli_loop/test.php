<?php
use app\database\dbgen;

require_once "vendor/autoload.php";
class index{
    private $db;
    public function __construct(){

        $shops=[
            ["milktea","192.168.0105","milktea","123",1],
            ["mocha","192.168.0106","mocha","123",1],
            ["latte","192.168.0107","latte","123",1],
            ["macha","192.168.0108","macha","123",1]
        ];
        $this->db=new dbgen();
        //$this->db->getSingleShop(1);
        //$this->db->getMultipleShop(1);
        //$this->db->insertSingleShop("thuthu","192.168.0104","thuthu","123",1);
        //$this->db->insertMultipleShop($shops);
        //$this->db->updateShop(5,"capuccino");
        //$this->db->deleteShop(6);
        $this->db->getJoinData(1);
    }
}
new index;