<?php
$secretWord = "apple";   // The word to guess
$maxGuesses = 3;         // Maximum guesses allowed
$guessCount = 0;

echo "Welcome to the Word Guessing Game!\n";
echo "Try to guess the secret word. You have $maxGuesses tries.\n";

while ($guessCount < $maxGuesses) {
    echo "Enter your guess: ";
    $guess = trim(fgets(STDIN));  // Read user input standard input
    
    $guessCount++;

    if ($guess === $secretWord) {
        echo "Congratulations! You guessed the word correctly.\n";
        exit();  //exit(0)   exit(1)
    } else {
        echo "Wrong guess.\n";
        $guessesLeft = $maxGuesses - $guessCount;
        echo "You have $guessesLeft guess(es) left.\n";
    }
}

echo "Sorry, you didn't guess the word. The word was '$secretWord'.\n";
