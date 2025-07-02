<?php
declare(strict_types= 1);
function sum(int ...$numbers):int {
    $sum = 0;
    foreach ($numbers as $number) { 
        $sum += $number;
    }
    return $sum;
}

$number = [1,2,3,5];
echo sum(...$number) ."\n"; // unpacking array elements as arguements
echo sum($number[0], $number[1],$number[2], $number[3]). "\n"; /// manually passed
echo sum(1, 2, 3) . "\n";     // 6
echo sum(4, 5, 6, 10); // 25







function team(string $coach, string ...$members):void {
    echo "Coach: $coach\n";
    echo "Members are: " . implode(", ", $members) . "\n";
    var_dump($members);
}

$Team = ["Pep","Cherki","Reijders", "Nouri"];
team("Madesh", "Harvey", ...$Team); //after unpacking you cant add another argument after that
team("Madesh", "Harvey", "Hufty", "Jere", "Tony", "Abdi", "Kako");


