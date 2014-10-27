<?php

include('interface.Engine.php');

class Engine implements EngineInterface {
    private $hp;

    public function getHP($hp) {
		$this->hp = $hp;
        return $this->hp;
    }
}
