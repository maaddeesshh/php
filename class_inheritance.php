<?php
class Person {
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function Call(): string {
        return "Hello $this->name, you're $this->age years old";
    }
}

// Pass values directly when creating the object
$person = new Person("Eugene", 99);

// Output the result
echo $person->Call();

// Class Employee extends Person{
//     public function __construct(
//         public string $name,
//         public int $age,
//         public $Position,

//     ){}


// }
// $person = new Person("Madesh",99);
// echo $person->Call();   

class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {
        parent::__construct($name, $age); // call the parent constructor
    }
}
$person = new Person("Madesh",99);
echo $person->Call();


Class Employee1 extends Person{
    public function __construct(
        public string $name,
        public int $age,
        public $Position,

    ){
        // parent::__construct($name, $age);
    }
    public function Call(): string {
        return  parent::Call(). " I'm the $this->Position";
    }


}
$person = new Employee1("Madesh",99, "Manager");
echo $person->Call(); 









