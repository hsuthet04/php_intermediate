<?php

class driver{
    public $name,$age,$family,$hourlyrate;

    public function setName(string $name){
        $this->name=$name;
    }
    public function getName():string{
        return $this->name;
    }
    public function setAge(int $age){
        $this->age=$age;
    }
    public function getAge():int{
        return $this->age;
    }
    public function setFamily(array $family){
        $this->family=$family;
    }
    public function getFamily():array{
        return $this->family;
    }
    public function setHourlyrate(float $hourlyrate){
        $this->hourlyrate=$hourlyrate;
    }
    public function getHourlyrate():float{
        return $this->hourlyrate;
    }
}
class car{
    public $brand,$model,$price,$spares,$status;

    public function __construct(string $brand,int $model,float $price,array $spares,bool $status){
        $this->brand=$brand;
        $this->model=$model;
        $this->price=$price;
        $this->spares=$spares;
        $this->status=$status;
    }
}
class rent{
    public $car,$driver;
    public function __construct(car $car,driver $driver){
        $this->car=$car;
        $this->driver=$driver;
    }
    public function getCar(): car{
        return $this->car;
    }
    public function getDriver(): driver{
        return $this->driver;
    }
}
$ethu=new driver();
$ethu->setName("E thu");
$ethu->setAge(20);
$ethu->setFamily(["father"=>"U human","mother"=>"Daw human","sister"=>"Ma human"]);
$ethu->setHourlyrate(8.5);

$starlone=new driver();
$starlone->setName("Starlone");
$starlone->setAge(10);
$starlone->setFamily(["father"=>"U ethu","mother"=>"Daw ethu","sister"=>"Ma ethu"]);
$starlone->setHourlyrate(0.5);

$toyota=new car("Alphabet",2017,30.5,["tissues","water","ticker"],TRUE);
$marcede=new car("Marcede",2018,40.5,["toys","bag","ticker"],TRUE);

$rent1=new rent($toyota,$ethu);
$rent2=new rent($marcede,$starlone);

$list=[$rent1,$rent2];

echo "there are ".count($list)." cars in this company<hr>";

$serialize=serialize($list);
echo $serialize."<br>";

$ary=unserialize($serialize);
echo "<pre>".print_r($ary,true)."</pre>";

echo "<hr>";

echo $list[1]->getDriver()->name;

