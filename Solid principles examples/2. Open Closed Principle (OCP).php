<?php
/*
 * Definition: Software entities should be open for extension but closed for modification.
 */

/**
 * Bad Example: The AreaCalculator class checks the type of shape and performs calculations, requiring modification to add new shapes.
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

/**
 * Good Example: Using an interface Shape with an area method, and implementing it in Rectangle and Circle classes allows extension without modifying existing code.
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