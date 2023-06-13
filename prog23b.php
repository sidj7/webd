<?php
$filename = 'example.txt'; 

$file = fopen($filename, 'w');

// Write content to the file
fwrite($file, "Hello, world!\n");
fwrite($file, "This is a test file.");

// Close the file
fclose($file);

echo "File written successfully.";
?>
