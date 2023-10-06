<?php 

include_once "../app/config/db.php";
$name="latte";
$stmt=$db->prepare("SELECT * FROM users WHERE name=:name");
$stmt->execute([
    "name"=>$name
]);
$result=$stmt->fetch(PDO::FETCH_OBJ);
echo "<pre>".print_r($result,true)."</pre>";

//ini_set("display_errors","Off");
// $db= new PDO("mysql:host=localhost;dbname=hacker","root","");

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $name=$_POST['name'];
//     $stmt=$db->prepare("SELECT * FROM users WHERE name=:name");
//     $stmt->bindParam(":name",$name);
//     $stmt->execute();
//     $result=$stmt->fetchAll(PDO::FETCH_OBJ);
//     echo "<pre>".print_r($result,true)."</pre>";
// }else{
//     echo $_GET['url'];
    
// }

?>
