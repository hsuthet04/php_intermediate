<?php

class accessing_class_properties{
    var $name="Pucci";
    var $age=25;

}
$obj=new accessing_class_properties();
echo $obj->name;
echo "<br>";
echo $obj->age;