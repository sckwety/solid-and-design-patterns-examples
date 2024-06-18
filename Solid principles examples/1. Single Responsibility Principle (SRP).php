<?php
/*
 * Definition: A class should have only one reason to change, meaning it should have only one job or responsibility.
 * */

/**
 * Bad example: The User class handles user data, saving to the database, and sending emails, violating SRP by having multiple responsibilities.
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

/**
 * Good example: Separate classes: User (handles user data), UserRepository (handles saving user data), and EmailService (handles sending emails).
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