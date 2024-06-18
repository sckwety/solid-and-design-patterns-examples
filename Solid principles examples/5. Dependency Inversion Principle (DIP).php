<?php

/**
 * Good Example
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

/**
 * Bad Example
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