<?php

/**
 * Good Example
 */
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    public function __construct(private $width, private $height) {}

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    public function __construct(private $radius) {}

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class AreaCalculator {
    public function calculate(Shape $shape) {
        return $shape->area();
    }
}

/**
 * Bad Example
 */
class Rectangle {
    public function __construct(private $width, private $height) {}

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle {
    public function __construct(private $radius) {}

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class AreaCalculator {
    public function calculate($shape) {
        if ($shape instanceof Rectangle) {
            return $shape->area();
        } elseif ($shape instanceof Circle) {
            return $shape->area();
        }
    }
}