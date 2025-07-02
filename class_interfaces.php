
<?php
interface Shape {
    public function area(): float;
}

class Square implements Shape {
    public function __construct(private float $side) {}

    public function area(): float {
        return $this->side * $this->side;
    }
}

class Circle implements Shape {
    public function __construct(private float $radius) {}

    public function area(): float {
        return pi() * $this->radius * $this->radius;
    }
}

function printArea(Shape $shape) {
    echo "Area is: " . $shape->area() . "\n";
}

printArea(new Square(4));    // Area is: 16
printArea(new Circle(3));    // Area is: ~28.27







// interface Shape {
//     public function area(): float;
// }

// class Square implements Shape {
//     public float $side; // public property

//     public function area(): float {
//         return $this->side * $this->side;
//     }
// }

// class Circle implements Shape {
//     public float $radius;

//     public function area(): float {
//         return pi() * $this->radius * $this->radius;
//     }
// }

// function printArea(Shape $shape) {
//     echo "Area is: " . $shape->area() . "\n";
// }

// // Create objects and set values directly
// $square = new Square();
// $square->side = 4;
// printArea($square); // Area is: 16

// $circle = new Circle();
// $circle->radius = 3;
// printArea($circle); // Area is: ~28.27

// The **implements** keyword is used when a class wants to follow the rules defined by an interface.