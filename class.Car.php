<?php

include('interface.Car.php');
require('class.Engine.php');

class Car implements RaceCarInterface {

    private $vMax;
    private $acc;
    private $model;
    private $hp;
    
    public function __construct($model, $hp) {
        $this->model = $model;
        $engine = new Engine();
        $engine->setHP($hp);
        $this->hp = $engine->getHP();
    }

    public function getVMax() {
        $this->vMax = 1.3 * $this->hp;
        return $this->vMax;
    }

    public function getAcceleration() {
        $this->acc = $this->hp * $this->vMax / 5000;
        return $this->acc;
    }

}
