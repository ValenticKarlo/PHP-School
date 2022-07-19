<?php
namespace Zoo;
trait Kudos {
    function give_kudos(){
        $this->kudos += 1;
        return $this->kudos;
    }
    function count_kudos(){
        return $this->kudos;
    }
}
