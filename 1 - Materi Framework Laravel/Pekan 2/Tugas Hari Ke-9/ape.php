<?php
    require_once('animal.php');
    class Ape extends Animal{
        public $legs = 2;
        public function Yell(){
            echo "Yell : Auooo";
        }
    }
?>