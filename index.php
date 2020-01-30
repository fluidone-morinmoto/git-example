<?php

function printChar($char) {
    for ($i = 0; $i < 29; $i++) {
        echo $char;
    }
    echo "\n";
}

printChar("#");
printChar("*");

echo "Hello World!";
echo "\n";

printChar("*");
echo "\n";
echo "Scriviamo ulteriori informazioni perche' lo vuole il cliente\n\n";
$version = file_get_contents("version.txt");
echo "Version: $version";
printChar("#");
?>
