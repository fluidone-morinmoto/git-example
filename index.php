<?php

echo "*****************************\n";
echo "Hello World!";
echo "\n";
echo "*****************************\n";
echo "\n";
echo "Scriviamo ulteriori informazioni perche' lo vuole il cliente\n\n";
$version = file_get_contents("version.txt");
echo "Version: $version";
?>
