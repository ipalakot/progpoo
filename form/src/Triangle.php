<?php

class Triangle extends Forme{

    private $base;
    private $hauteur;

    public function __construct($base, $hauteur){
        $this->base=$base;
        $this->hauteur=$hauteur;
    }

    public function aire(){
        return $this->base * $this->hauteur *0.5;
    }
}