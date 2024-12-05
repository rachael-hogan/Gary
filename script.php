#!/usr/bin/env php
<?php
require 'Gary2.php';

//$gary = new Gary2();
//while (true) {
//    echo("Please provide a commands (m, l, r):\n");
//    // Get input from the user
//    $input = trim(fgets(STDIN));
//
//    // Check if the user wants to end the input
//    if ($input === 'end') {
//        break;
//    }
//
//   $gary->executeMove($input);
//}

if ($argc > 1) {
    $gary = new Gary2();
    $gary->splitCommands($argv[1]);
} else {
    echo "Please provide a sequence of commands (m, l, r).\n";
}