<?php

#Improved Performance and Engine Improvements:
/*
    PHP 8 is a significant release that introduces new syntax features, performance improvements, and better type safety. These changes help developers write cleaner, more maintainable, and more efficient code.
*/

#JIT (Just-In-Time) Compilation:
/*
    Explanation: JIT compilation can significantly improve performance by converting PHP bytecode into machine code at runtime, potentially making PHP applications run faster.
    Impact: Performance improvements in CPU-intensive tasks, but typical web applications may see moderate performance gains.
 */


#Union Types: Allows specifying multiple types for a parameter, property, or return type.
function foo(int|string $value): int|string {
    return is_int($value) ? $value : strlen($value);
}

#Named Arguments: Allows passing arguments to a function based on the parameter name instead of the position.
function foo(string $a, int $b, bool $c) { /* ... */ }
foo(b: 42, c: true, a: 'hello');

#Attributes (Annotations): Provides a native way to add metadata to classes, methods, properties, etc., using structured syntax.
#[Attribute]
class MyAttribute {
    public function __construct(public string $name) {}
}
#[MyAttribute('example')]
class MyClass {}

#Constructor Property Promotion: Simplifies the initialization of properties in the constructor.
class Point {
    public function __construct(
        private int $x,
        private int $y
    ) {}
}

#Match Expression: Introduces a more concise and flexible alternative to switch statements.
$result = match($value) {
    1 => 'One',
    2, 3 => 'Two or Three',
    default => 'Other',
};

#Nullsafe Operator: Allows safe navigation through object properties and methods, avoiding null checks.
$country = $user?->getAddress()?->getCountry();

#Static Return Type: Allows specifying static as a return type, supporting static type inference in inherited
class Base {
    public function getInstance(): static {
        return new static();
    }
}

#Weak Maps: Introduces WeakMap, which allows storing objects without preventing their garbage collection.
$map = new WeakMap();
$obj = new stdClass();
$map[$obj] = 'value';

#New String Functions: Adds new functions for string operations.
str_contains('Hello World', 'World'); // true
str_starts_with('Hello World', 'Hello'); // true
str_ends_with('Hello World', 'World'); // true

#Improved Type System and Error Handling: A new type hint mixed that indicates a parameter can accept multiple types.
$value = $key ?? throw new \InvalidArgumentException('Key not found');
