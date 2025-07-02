<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;  // base case
    } else {
        return $n * factorial($n - 1);  // recursive case
    }
}

echo factorial(5);  // Output: 120


