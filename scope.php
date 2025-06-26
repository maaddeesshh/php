<?php
$counter = 5; // This is a global variable

function incrementCounter() {
    global $counter; // Import the global variable into the function's scope
    $counter++;      // Now we can use and modify it
    $message = "Six";
    echo "Counter inside function: $counter\n";
    echo " $message--- $counter";
}

incrementCounter();
echo "Counter outside function: $counter\n";





function incrementCounter1($counter) {  // use the same variable name because they are in different scope
 
    $message = "Six";
    $counter++;
    echo "Counter inside function: $counter\n";
    echo " $message--- $counter";
}

incrementCounter1($counter);// use the same variable name because they are in different scope
echo "Counter outside function: $counter\n";



function counter() {
    static $count = 0;  // This is a static variable
    $count++;
    echo "Count: $count\n";
}

counter();  // Count: 1
counter();  // Count: 2
counter();  // Count: 3


function counters() {
    $count = 0;  // This is a regular local variable
    $count++;
    echo "Count: $count\n";
}

counters();  // Count: 1
counters();  // Count: 1
counters();  // Count: 1


function trackVisits() {
    static $visits = 0;
    $visits++;
    echo "You have visited this function $visits times.\n";
}

trackVisits();
trackVisits();
