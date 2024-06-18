<?php

/**
 * Good Example
 */
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

class HumanWorker implements Workable, Eatable {
    public function work() {
        // Work
    }

    public function eat() {
        // Eat
    }
}

class RobotWorker implements Workable {
    public function work() {
        // Work
    }
}

/**
 * Bad Example
 */
interface Worker {
    public function work();
    public function eat();
}

class HumanWorker implements Worker {
    public function work() {
        // Work
    }

    public function eat() {
        // Eat
    }
}

class RobotWorker implements Worker {
    public function work() {
        // Work
    }

    public function eat() {
        // Robots don't eat
    }
}