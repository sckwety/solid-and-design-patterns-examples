<?php

/**
 * Good Example
 */
interface Bird {
    public function move();
}

class Sparrow implements Bird {
    public function move() {
        // Fly
    }
}

class Ostrich implements Bird {
    public function move() {
        // Run
    }
}

/**
 * Bad Example
 */
class Bird {
    public function fly() {
        // Fly
    }
}

class Ostrich extends Bird {
    public function fly() {
        throw new Exception("Ostriches can't fly");
    }
}