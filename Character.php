<?php 

class Character {

    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck;

    public function __construct($health, $strength, $defence, $speed, $luck){
        $this->health   = $health;
        $this->strength = $strength;
        $this->defence  = $defence;
        $this->speed    = $speed;
        $this->luck     = $luck;  

    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    
}

class CharacterFactory {

    
}