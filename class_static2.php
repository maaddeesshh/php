<?php
class Singleton {
    // Holds the single instance
    private static ?Singleton $instance = null;

    // Private constructor to prevent direct object creation
    private function __construct() {
        echo "Singleton instance created\n";
    }

    // Method to access the single instance
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function sayHello(): void {
        echo "Hello from the Singleton\n";
    }
}

// Usage
$firstCall = Singleton::getInstance();
$firstCall->sayHello();

$secondCall = Singleton::getInstance();
$secondCall->sayHello();

// Confirm both are the same
var_dump($firstCall === $secondCall); // true
