

<?php
function add($a, $b) {
    return $a + $b;
}

echo add(2, 3);  // Always 5
echo add (2,3);




$counter = 0;
function increaseCounter() {
    global $counter;
    $counter++;
    return $counter;
}
echo increaseCounter();  
echo increaseCounter();
echo increaseCounter();




$add = fn($a, $b) => $a + $b;
echo add(2,3);