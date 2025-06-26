<?php
function greetings(string $name, string $greet="Hello", bool $shout= False ){
    $message = "$name, $greet";
    echo $shout ? strtoupper($message) : $message;
}
greetings(name: "Alice", shout: True);