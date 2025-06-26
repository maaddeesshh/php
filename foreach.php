<?php

$fruits = ['apple', 'banana', 'cherry'];

foreach ($fruits as $fruit) {
    echo "I like $fruit\n";
}



$person = [
    'name' => 'Eugene',
    'age' => 5,
    'city' => 'Nairobi'
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}


$fruits = [
    'Avocado' => 10,
    'Mango' => 4,
    
];
$Total = 0;

foreach ($fruits as $Item => $Quantity) {
    echo "$Item: $Quantity\n";
    $Total +=$Quantity;
    

}
echo "$Total";



$numbers = [1,2,3,4,5];
$squared = [];
foreach ($numbers as $n) {
    $squared[] = $n * $n;
}
print_r($squared);  
var_dump($squared);
echo implode(" , ", $squared);