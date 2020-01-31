<?php

/**
 * This function simulate a log with the echo command
 *
 * @param $message (string) - the string to log
 *
 * @return void
 */
function debug($message) {
    echo "[ DEBUG ] $message\n";
}

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

debug("Connection...");
debug("Connected!!!");
// Print 29 #
printChar("#");
// Print 29 *
printChar("*");

debug("Ready to print the output message");
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
debug("Operation completed")
?>
