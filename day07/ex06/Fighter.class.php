<?php

abstract class Fighter {
    private $who;
    public function __construct($target){
        $this->who = $target;
    }
    public function _toString(){
        return $this->who;
    }
    abstract function fight($targ);
}