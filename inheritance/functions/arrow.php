<?php
$numbers = [1,2,3,4,5,6,7];
$multiplier = 4;
$number = array_map (fn ($n) => $n * $multiplier, $numbers);
print_r ($number);





