<?php
function countTo($max) : generator {
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

foreach (countTo(5) as $value) {
    echo $value . "\n";
}




function countTo1($max) {
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

foreach (countTo(5) as $value) {
    echo $value . "\n";
}




function count3($max1) {
    for ($i = 1; $i <= $max1; $i++) {
    yield random_int(1,1000);
    }
}
foreach (count3(5) as $value) {
    echo $value . "";
}
