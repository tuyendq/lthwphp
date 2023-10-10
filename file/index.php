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

// $file_handle = fopen('quotes.txt', 'r');
// // TODO
// fclose($file_handle);