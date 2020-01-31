<?php
/**
 * This function prints the passed char 29 times, then prints a new line
 *
 * @param $char (char) - the char to print
 *
 * @return void
 *
 */
function printChar($char) {
    for ($i = 0; $i < 29; $i++) {
        echo $char;
    }
    echo "\n";
}

// Print 29 #
printChar("#");
// Print 29 *
printChar("*");

// Print the phrase "Hello World!"
echo "Hello World";
// Print a new line
echo "\n";

// Print 29 *
printChar("*");
// Print a new line
echo "\n";
// Print information about this software for the dummy customer
echo "We write more informations because the customer is a little bit stupid\n\n";
// Read the version number from the version.txt file
$version = file_get_contents("version.txt");
// Print the version number
echo "Version: $version";
// Print 29 #
printChar("#");
?>
