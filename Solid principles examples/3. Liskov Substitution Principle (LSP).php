<?php
/*
 * Definition: Subtypes must be substitutable for their base types without altering the correctness of the program.
 */

/**
 * Bad Example: Ostrich inherits from Bird but cannot fly, violating LSP as it changes expected behavior.
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

/**
 * Good Example: Sparrow and Ostrich implement a Bird interface with a move method, allowing different behaviors (flying, running) without altering correctness.
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