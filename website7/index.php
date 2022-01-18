<?php

$path = '/dir1/myfile.php';
$file = 'file1.txt';
// Return filename
// echo basename($path);

// Return filename without ext
// echo basename($path, '.php');

// Return dirname from the path
// echo dirname($path);

// echo file_exists($file); // returns 1 for true, can use for folder as well as file

// Get absolute path
// echo realpath($file);

// Checks to see if file
// echo is_file($file);

// check is a file is writeable

// echo is_writeable($file);
// echo is_readable($file);

// Get file size

// echo filesize($file);

// Create a dir
// mkdir('testing'); // makes a folder in curr dir

// remove dir if empty
// rmdir('testing');

// Copy file
// echo copy('file1.txt', 'file2.txt');

// Rename file
// rename('file2.txt', 'myfile.txt');

// Delete
// unlink('myfile.txt');

// Write from file to str
// echo file_get_contents($file);

// write str to file
// echo file_put_contents($file, 'Goodbye World');


/* Append files
$current = file_get_contents($file);
$current .= ' Goodbye World';
file_put_contents($file, $current);
*/

// Open file for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;
// fclose($handle);


/* Create, Open file write to file
$handle = fopen('file2.txt', 'w');
$txt = 'John Doe';
fwrite($handle, $txt);
fclose($handle);
*/
