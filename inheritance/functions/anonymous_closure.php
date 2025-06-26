<?php
$greet = function($name)
{
    return "Hello  " . $name ."\n";
};
echo $greet("Alice");



$numbers = [1, 2, 3, 4];

$squared = array_map(function($n) {
    return $n * $n;
}, $numbers);

echo implode(", ", $squared);
print_r($squared);


$message= "Jambo!!!!";

 $greeet = function($name) use ($message){
    return $message ."". $name ."";
 };

 echo $greeet("Alice");



 $message1= "Jambo!!!!";

 $greeet1 = function($name) use ($message1){  // a copy of the original version is passed -- pass by value
    $message1 = "Sasa";
    return $message1 ."". $name ."";
 };

 echo $greeet1("Alice");
 echo("$message1");// the original version 


  $message2= "Jambo!!!!";

 $greeet1 = function($name) use (&$message2){  // the original version is passed-- pass by reference
    $message2 = "Sasa";
    return $message2 ."". $name ."";
 };

 echo $greeet1("Alice");
 echo("$message2");// changes because it is passed by reference 



