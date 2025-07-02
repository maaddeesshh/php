<?php
class Car {
    public $brand;
    public $color;

    public function drive() {
        return "Driving the $this->color $this->brand";
    }
}

// Create an object (instance)
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";

echo $myCar->drive();  // Output: Driving the Red Toyota


class Car1 {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function drive() {
        return "Driving a $this->color $this->brand";
    }
}

$car = new Car1("Subaru", "Blue");
echo $car->drive(); // Driving a Blue Subaru







class Car3 {
    // Constructor Property Promotion (PHP 8.0+)
    public function __construct(
        public string $washed,
        public string $clean
    ) {}

    public function wash(): string {
        return "This car is $this->washed and $this->clean.";
    }
}

// Create an object and call the method
$car3 = new Car3("Washed", "Clean");
echo $car3->wash();




class Car4{

    public $speed;
    public $kilometer;
    public function __construct($speed,$kilometer)
    {
        $this->speed = $speed;
        $this->kilometer = $kilometer;
    }
    public function drives() {
        return "The car went $this->kilometer with $this->speed";
    }
}
$car4 = new Car4("30km","100km/h");
echo $car4->drives();




class Car5{

    
    public function __construct(
    public $speed,
    public $kilometer)
    {
    }
    public function drivess() : string {
        return "The car went $this->kilometer with $this->speed";
    }
}
$car4 = new Car5("30km","100km/h");
echo $car4->drivess();