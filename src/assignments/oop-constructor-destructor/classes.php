<?php
class Animal{
    public $species;
    public $kudos;
    protected $calling;

    const CONJUNCTION = "says";

    function __construct($species, $calling){
        if(is_string($species) && is_string($calling)){
            $this->species = $species;
            $this->calling = $calling;
        }
        else{
            $this->species = null;
            $this->calling = null;
        }
    }
    function __destruct()
    {
        echo $this->species. self::CONJUNCTION . $this->calling;
    }
}
