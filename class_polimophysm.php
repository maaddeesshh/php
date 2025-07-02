<?php
class Animal {
    public function speak() {
        return "Some generic sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Bark!";
    }
}

class Cat extends Animal {
    public function speak() {
        return "Meow!";
    }
}

// Polymorphic behavior
function makeItSpeak(Animal $animal) {
    echo $animal->speak() . "\n";
}

makeItSpeak(new Dog());  // Output: Bark!
makeItSpeak(new Cat());  // Output: Meow!
