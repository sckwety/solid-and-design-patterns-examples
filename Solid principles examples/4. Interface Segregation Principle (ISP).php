<?php
/*
 * Definition: Clients should not be forced to depend on interfaces they do not use.
 */

/**
 * Bad Example: The Worker interface includes both work and eat methods, forcing RobotWorker to implement an irrelevant eat method.
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

/**
 * Good Example: Separate interfaces: Workable (with work method) and Eatable (with eat method), so HumanWorker implements both, while RobotWorker only implements Workable.
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