<?php 

/* Challenge

You need to create a program that calculates the sum of all numbers between 1 and a number provided by the user, except those divisible by 3.

Input

The program must receive input from the user, which should be a positive integer. Then, the program should calculate the sum of all numbers between 1 and the user-provided number, excluding those divisible by 3.

Output

The program's output must print a message showing the sum of the numbers from 1 to the user-provided number (excluding those divisible by 3). */

// Prompt the user to enter a positive integer
echo "Please enter a positive integer: ";
$number = intval(fgets(STDIN)); // Read the input and convert it to an integer

$sum = 0;

// Loop through all numbers from 1 to the user-provided number
for ($i = 1; $i <= $number; $i++) {
    // Check if the current number is not divisible by 3
    if ($i % 3 !== 0) {
        $sum += $i; // Add the number to the sum
    }
}

// Print the formatted result with the calculated sum
echo "The sum of numbers from 1 to $number, excluding those divisible by 3, is: $sum\n";

?>

