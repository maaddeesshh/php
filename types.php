<?php
$isStudent = 1;
var_dump($isStudent, $isStudent==True, $isStudent===True);
var_dump($isStudent==True);
var_dump(true);



$numbers = [85, "557", 77.7]; 
var_dump($numbers);
var_dump($numbers[0]);
var_dump($numbers[1]);
var_dump($numbers[0]+ $numbers[1]);
var_dump($numbers[0] . $numbers[1]);
var_dump($numbers[2]);
var_dump($numbers[0]+ $numbers[1]+$numbers[2]);
var_dump($numbers[1]+ $numbers[2]);
$number = [(int)"55.5"];
var_dump($number);


$pizza = [2,3,4];
$total = ($pizza[0] + $pizza[1]);

echo "Total: $total \n";

