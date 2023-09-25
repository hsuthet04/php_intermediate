<?php

require_once "vendor/autoload.php";
use app\posts\post;
class index{
    public function __construct(){
        $fname="e";
        $lname="thu";
        $content="that's werid";
        //error
        //$author=new author($fname,$lname);
        //$post=new post($author,$content);
        //$this->answerout($post);
    }
    public function answerout(post $post){
        
        $author=$post->getAuthor();
        echo $author->getFirstname();
        echo $author->getLastname();

    }
}
new index();