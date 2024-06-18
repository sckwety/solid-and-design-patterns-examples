<?php
/*
 * Definition: High-level modules should not depend on low-level modules but on abstractions. Abstractions should not depend on details.
 */

/**
 * Bad Example: UserRepository directly depends on MySQLConnection, making it hard to switch to another database.
 */
class MySQLConnection {
    public function connect() {
        // Connect to MySQL
    }
}

class UserRepository {
    private $dbConnection;

    public function __construct() {
        $this->dbConnection = new MySQLConnection();
    }
}

/**
 * Good Example: UserRepository depends on a DBConnection interface, allowing any implementation of DBConnection (e.g., MySQLConnection) to be used.
 */
interface DBConnection {
    public function connect();
}

class MySQLConnection implements DBConnection {
    public function connect() {
        // Connect to MySQL
    }
}

class UserRepository {
    private $dbConnection;

    public function __construct(DBConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}