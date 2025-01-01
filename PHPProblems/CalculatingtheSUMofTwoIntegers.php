<?php
/* Challenge

Read two integer values identified as variables A and B. Calculate the sum between them and call this variable SUM.
Next, write the value of this variable.

Input

The input file contains 2 integer values.

Output

Print the variable SUM in uppercase letters, inserting a blank space before and after the equals sign, followed by the corresponding value of the sum of A and B. */


// Ask the user for the first number
echo "Enter the first number: ";
$a = intval(fgets(STDIN));

// Ask the user for the second number
echo "Enter the second number: ";
$b = intval(fgets(STDIN));

// Calculate the sum
$soma = $a + $b;

// Display the result
echo "SUM = $soma\n";

?>
