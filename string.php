<?php
// Defining the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels
function countVowels($str) {
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    // Iterate character
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}


foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowelCount = countVowels($string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the original string, reversed string, and vowel count
    echo "Original String: $string\n";
    echo "Vowel Count: $vowelCount\n";
    echo "Reversed String: $reversedString\n\n";
}
?>
