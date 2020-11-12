<?php
class Circle{
    public $name;
    public $radius;
    public function __construct($radius,$name){
            $this->name=$name;
            $this->radius=$radius;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius=$radius;
    }
}