<?php

namespace Acme;

class League{
    private $name;
    private $team;

    public function __construct($name){
        $this -> name = $name;
        $this -> team =[];
    }

    public function addTeam(Team $team){
        $this->team[] = $team;
    }

    public function getTeamCount(){
        return count($this->team);
    }
}