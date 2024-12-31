<?php

/* Challenge

Two motorcycles (X and Y) start in the same direction. Motorcycle X moves at a constant speed of 60 km/h, while motorcycle Y moves at a constant speed of 90 km/h.

In one hour (60 minutes), motorcycle Y manages to distance itself 30 kilometers from motorcycle X, meaning it moves one kilometer further every 2 minutes.

Your challenge is to read the distance (in kilometers) and calculate how long it will take (in minutes) for motorcycle Y to be that far ahead of motorcycle X.

Input

The input contains an integer K, which represents the number of kilometers that motorcycle Y should be ahead of motorcycle X.

Output

Print the time required for motorcycle Y to be K kilometers ahead of motorcycle X, followed by the message " minutes". */

// Ask the user to enter the distance in kilometers
echo "Enter the distance (in kilometers) that motorcycle Y should be ahead of motorcycle X: ";

// Read the distance (K) from the user
$distance = intval(fgets(STDIN)); // Convert input to an integer

// Time difference for motorcycle Y to cover 1 km more than motorcycle X is 2 minutes
$diff = 2; // 2 min/km

// Calculate the time necessary for motorcycle Y to distance itself by the given kilometers
$timeNecessary = $distance * $diff;

// Print the result followed by the word "minutes"
echo "$timeNecessary minutes\n";

?>
