<?php
//body pr tk method concrete method tee sout kwint ma shi
//variable ma ya constant value ya
interface rulegame{
         public function gamescene();
        public function vegetables();
        public function housing();
        public function actor();
}
class index implements rulegame{
    public function gamescene(){
        echo "hello game scene";
    }  
    public function vegetables(){
        echo "hello vegetables";
    }
    public function housing(){
        echo "hello housing";
    }
    public function actor(){
        echo "hello actor";
    }
}
$game=new index();
$game->gamescene();
$game->vegetables();
$game->housing();
$game->actor();