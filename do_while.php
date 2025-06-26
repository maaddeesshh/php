<?php
do {
    $roll = rand(1, 6);
    echo "You rolled a $roll\n";

    if ($roll == 6) {
        echo "Jackpot! You rolled a 6!\n";
        break;  // End the game immediately
    } else {
        // Ask if user wants to roll again
        echo "Not a jackpot. Roll again? (y/n): ";
        // $handle = fopen("php://stdin", "r");
        $answer = trim(fgets(STDIN));

    }
} while ($answer == 'y');
?> 




<?php
do {
    $roll = rand(1, 6);
    echo "You rolled a $roll\n";

    if ($roll == 6) {
        echo "Jackpot! You rolled a 6!\n";
        break;  // End the game immediately
    } else {
        echo "Not a jackpot. Roll again? (y/n): ";
        $answer = strtolower(trim(fgets(STDIN)));
    }
} while ($answer === 'y');

echo "Thanks for playing!\n";
?>
