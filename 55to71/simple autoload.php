<?php

require_once "loader.php";

class index{

    public function __construct()
    {
        loader::loader('helperr');
        $helperr=new helperr("helperr");
        $helperr->urname();

        loader::loader('hello');
        $hello=new hello("hello");
        $hello->sayhello();

        loader::loader('hey');
        $hey=new hey("hey");
        $hey->sayhey();

        
    }
}
$ind=new index();