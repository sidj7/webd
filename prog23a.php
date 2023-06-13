<?php
$filename = 'example.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, 'r');

    // Read and output the file contents
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }

    // Close the file
    fclose($file);
} else {
    echo "File not found.";
}
?>
