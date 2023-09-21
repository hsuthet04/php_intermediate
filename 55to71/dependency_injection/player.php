<?php

class player{
    private $path;
    private $music;

    // public function __construct($path,$music){
    //     $this->path=$path;
    //     $this->music=$music;
    // }
    // public function playnow(){
    //     echo "playing now".$this->music."from".$this->path;
    // }
    
    public function setmusicPath($path){
        $this->path=$path;    
    }
    public function setmusic($music){
        $this->music=$music;    
    }
    public function getmusicPath(){
        return $this->path;
    }
    public function getmusic(){
        return $this->music;
    }
}