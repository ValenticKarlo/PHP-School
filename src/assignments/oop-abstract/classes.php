<?php
abstract class SetGet{
    abstract public function get_color() : string;
    abstract public function set_color($color):void;

}

class Attributes extends SetGet{
    private $default = 'n/a';
    protected $weight;
    protected $height;
    protected $color;

    function __construct(){
        $this->weight = $this->default;
        $this->height = $this->default;
        $this->color = $this->default;
    }

    public function get_color():string{
        return $this->color ? $this->color : $this->default;
    }
    public function set_color($color):void{ 
        if (is_string($color)) {
            $this->color = $color;
        } else{
            $this->color = $this->default;
        }
    }
}

class Animal extends Attributes{
    public $species;
    public $kudos;
    protected $calling;

    const CONJUNCTION = "says";

    function __construct($species, $calling){
        parent::__construct();
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
