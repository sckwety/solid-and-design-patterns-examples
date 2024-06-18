<?php

/**
 * Good example
 */
class User {
    public function __construct(private $name, private $email) {}

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class UserRepository {
    public function save(User $user) {
        // Code to save user to the database
    }
}

class EmailService {
    public function sendEmail(User $user) {
        // Code to send email
    }
}

/**
 * Bad example
 */
class BadUser {
    public function __construct(private $name, private $email) {}

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function save() {
        // Code to save user to the database
    }

    public function sendEmail() {
        // Code to send email
    }
}