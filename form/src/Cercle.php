<?php

class Cercle extends Forme {

    private $rayon;

    public function __construct($rayon){
        $this -> rayon = $rayon;
    }

    public function aire(){
        return M_PI * $this->rayon * $this->rayon;
    }
    
}