<?php
$number = 10;
if($number >5)
{
    echo"Number is greater than 5\n";

}


// when you have only one statement inside the curly braces-- you can remove them

$number = 10;
if($number >5)

    echo"Number is greater than 5\n";



$number = 10;
if($number <5)
{
    echo"Number is greater than 5\n";

}
else{
    echo "Number is less than 5\n";
}


$score = 78;
if($score >= 90)
{
    echo "You have an A\n";
}elseif($score >= 80){
    echo "You have a B \n";
}elseif($score >= 70){
    echo "You have a  C\n ";
}elseif($score >= 60){
    echo "You have a  D \n";
}elseif($score >= 50){
    echo "You have a E \n";
}else{
    echo "You've failed\n";
}



$number = 7; 

if ($number != 0) {
    if ($number % 2 == 0) {
        echo "$number is even.\n";
    } else {
        echo "$number is odd.\n";
    }
} else {
    echo "The number is zero.\n";
}



$username = "admin";
$password = "12345";

if ($username == "admin") {
    if ($password == "12345") {
        echo "Access granted";
    } else {
        echo "Incorrect password";
    }
} else {
    echo "Incorrect username";
}


$username = "admin";
$password = "12345";

if ($username == "admin" && $password == "12345") {
    echo "Access granted";
} else {
    echo "Invalid username or password";
}
