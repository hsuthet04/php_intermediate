<?php

require_once "player.php";

class index{
    // public function __construct(){
    //     $player=new player("C:/xampp/htdocs/musicforphptest","watercoloreyes.mp3");
    //     $player->playnow();
    // }
    public function __construct(){
        $player=new player();
        $player->setmusicPath("C:/xampp/htdocs/musicforphptest");
        $player->setmusic("watercoloreyes.mp3");

       $this->playNow($player->getmusicPath(),$player->getmusic());
    }
    public function playNow($path,$music){
        echo "playing".$music."from".$path;
    }
}
new index();