<?php

var_dump( file_get_contents('quotes.txt') );


// # Read file line by line
// $lines = file('quotes.txt');
// $count = 1;
// foreach ($lines as $line) {
//     echo $count . ' ' . $line;
//     $count++;
// }

// echo readfile('quotes.txt');

# Open file to append
// $file_handle = fopen('quotes.txt', 'a');
// // TODO
// fclose($file_handle);