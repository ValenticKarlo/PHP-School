<?php
class Animal{
    public $species;
    public $kudos;
    protected $calling;

    function set_species($species){
        if(is_string($species)){
            $this->species = $species;
        }
        else{$this->species = null;}
    }
}
