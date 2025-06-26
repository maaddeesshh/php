<?php
declare(strict_types=1);

function processInput(int|float|string $input) {
    return match (true) {
        is_int($input)   => "You entered an integer: $input",
        is_float($input) => "You entered a float: $input",
        is_string($input) => "You entered a string: '$input'",
        default => "Unknown type"
    };
}

// Test examples
echo processInput(42) ;         // integer
echo processInput(3.14) ;       // float
echo processInput("Hello") ;    // string





function processInputs(array $inputs): void {
    foreach ($inputs as $input) {
        echo match (true) {
            is_int($input)   => "Integer: $input\n",
            is_float($input) => "Float: $input\n",
            is_string($input) => "String: '$input'\n",
            default => "Unknown type\n"
        };
    }
}

// Example input array
$data = [42, 3.14, "Hello", "123", 0, 7.0];

processInputs($data);






// Function processes a single item
function processInput1(int|float|string $input): string {
    return match (true) {
        is_int($input)   => "Integer: $input",
        is_float($input) => "Float: $input",
        is_string($input) => "String: '$input'",
        default => "Unknown type"
    };
}

// Input array
$data = [42, 3.14, "Hello", "123", 0, 7.0];

// Loop outside the function
foreach ($data as $item) {
    echo processInput1($item);
}
