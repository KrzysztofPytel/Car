<?php

include('interface.Engine.php');

class Engine implements EngineInterface {

    private $hp;

    public function setHP($hp) {
        $this->hp = $hp;
    }

    public function getHP() {
        return $this->hp;
    }

}
