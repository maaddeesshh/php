<?php
$grade = 'B';

$message = match($grade) {
    'A' => 'Excellent work!',
    'B' => 'Good job!',
    'C' => 'Fair effort.',
    'D' => 'Needs improvement.',
    'F' => 'Failed. Try again.',
    default => 'Invalid grade.',
};

echo "Grade: $grade - $message\n";


$number = 3;

$result = match($number) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    default => 'Unknown number',
};

echo $result;  // Outputs: Three





$otieno = 'otieno';  // Person's name

$result3 = match($otieno) {
    'otieno' => 'Jaluo',
    'omondi' => 'Luhya',
    default => 'Unknown tribe',
};

echo $result3;  // Output: Jaluo



$fruit = 'Avocado';
$result4 = match($fruit) {
    'Avocado'=> 'Sweet',
    'Mango'=> 'Juicy',
    default => 'Unknown Entity',
};