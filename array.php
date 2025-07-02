<?php
$array = [1,3,4,5,6];
$array[]= 99;
print_r($array);

$array1 =[
    "One"=>1,
    "NINE"=> 2,
    "Seven"=> 3,
];
$array1["Four"]=4;
print_r($array1);

$array3 = [
    [1,7,3],
    [4,5,12],
    [6,77,8],
];
print_r($array3[2][2]);

$fruits=["Banana", "Ndums", "Orange", "Apple"];
echo (count($fruits));
sort($fruits);
print_r($fruits);
asort($array1);
print_r($array1);
ksort($array1);
print_r($array1);
$first= $fruits[1];
[$third,,$forth]= $fruits;



$numbers = range(1,10);
var_dump($numbers);
$squared = array_map(fn($n) => $n*10,$numbers);
print_r($squared);


$even = array_filter($numbers, fn($n) => $n%2== 0);
var_dump($even);    

$unpack = [1,2,...$numbers];
var_dump($unpack);



echo $first;
echo $third;
echo $forth;



$numbers = [1, 2, 3, 4, 5];

$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);

echo $sum;  // Output: 15






$set1 = [1,3,4,5,6,7];
$set2 = [1,9,8,7,0,4];
print_r(array_diff($set1, $set2));
print_r(array_diff($set2, $set1));
print_r(array_intersect($set1, $set2)); 

$keys=array_keys($array1);
$values= array_values($array1);

$merge=array_merge($set1,$set2);