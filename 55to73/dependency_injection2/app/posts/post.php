<?php

namespace app\posts;

use app\authors\author;

class post{
    private $content;
    private $author;

    public function __construct(author $author,$content){
        //$author=new author($fname,$lname);
        $this->author=$author;
        $this->content=$content;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getContent(){
        return $this->content;
    }

}