<?php


$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;

    case "Friday":
        echo "Almost weekend!";
        break;

    case "Sunday":
        echo "Rest day.";
        break;

    default:
        echo "Just another day.";
        
};




$size = 'M'; // This could come from user input

switch (strtoupper($size)) {
    case 'S':
        echo "You selected Small size.";
        break;

    case 'M':
        echo "You selected Medium size.";
        break;

    case 'L':
        echo "You selected Large size.";
        break;

    case 'XL':
        echo "You selected Extra Large size.";
        break;

    default:
        echo "Invalid size selected.";
};



$marks = 78; // Marks out of 100

switch (true) {
    case ($marks >= 90 && $marks <= 100):
        echo "Grade: A";
        break;

    case ($marks >= 80):
        echo "Grade: B";
        break;

    case ($marks >= 70):
        echo "Grade: C";
        break;

    case ($marks >= 60):
        echo "Grade: D";
        break;

    case ($marks >= 0):
        echo "Grade: F";
        break;

    default:
        echo "Invalid marks entered.";
        break;
};


// Step 1: Ask professor to enter student marks
echo "Enter student marks (0-100): ";
$marks = (int)trim(fgets(STDIN));  // Read input and convert to integer

// Step 2: Determine the grade based on marks
if ($marks >= 90 && $marks <= 100) {
    $grade = 'A';
} elseif ($marks >= 80) {
    $grade = 'B';
} elseif ($marks >= 70) {
    $grade = 'C';
} elseif ($marks >= 60) {
    $grade = 'D';
} elseif ($marks >= 0) {
    $grade = 'F';
} else {
    echo "Invalid marks entered.\n";
    exit(1); // Exit the program with error
}

// Step 3: Use switch to describe the grade
switch ($grade) {
    case 'A':
        echo "Grade: A - Excellent work!\n";
        break;

    case 'B':
        echo "Grade: B - Good job!\n";
        break;

    case 'C':
        echo "Grade: C - Fair performance.\n";
        break;

    case 'D':
        echo "Grade: D - Needs improvement.\n";
        break;

    case 'F':
        echo "Grade: F - Failed. Try harder next time.\n";
        break;

    default:
        echo "Something went wrong.\n";
        break;
};
