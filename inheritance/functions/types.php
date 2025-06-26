<?php
/* The `declare(strict_types=1);` statement in PHP is used to enforce strict typing for scalar type
declarations in a PHP script. When strict typing is enabled with this declaration at the beginning
of a PHP script, PHP will perform strict type checking for function arguments and return values that
have type declarations (like `int`, `string`, etc.). This means that PHP will only allow values of
the specified type to be passed to functions or returned from functions, and it will throw a
TypeError if the types do not match. */

// declare(strict_types= 1);
function adding(int $a, int $b): int { 
    return $a + $b; 

};
echo adding("3", 4);   
var_dump(adding("4",5));



function add(int $a, int $b): int { 
    return $a + $b; 

};
echo add("3", 4);   
var_dump(add("4",5));