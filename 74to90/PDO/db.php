<?php

require_once "dal.php";
class db extends dal{
    public function __construct($db_host,$db_name,$db_user,$db_pass)
    {
        parent::__construct($db_host,$db_name,$db_user,$db_pass);
    }
    public function connect()
    {
        if($this->db==null)
        
        $this->db=new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name,$this->db_user,$this->db_pass);
        return $this->db;
    }
    public function disconnect()
    {
        if($this->db!=null)
            $this->db=null;
    }
    public function fetchData($table,$modifier)
    {
        $stmt=$this->db->prepare("SELECT * FROM students WHERE id=:id");
       //$stmt->bindParam(":table",$table);
        $stmt->bindParam(":id",$modifier);
        $result=$stmt->execute();
        if($result)
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        else
        return null;
    }
    
}
$db=new db("localhost","nowdb","root","");
//var_dump($db->connect());
$db->connect();
$data=$db->fetchData("students",1);
if($data!=null)
    echo $data[0]->name;
else "error";

    


