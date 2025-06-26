<?php
function greet($name){
    return"Hello".$name."";

};

echo greet("Alice\n");



function greeet( $name, $day= "day"){
    return "Good ".$day." " .$name."";
};
echo greeet("Eugene \n");
echo greeet("Alex", "Evening");