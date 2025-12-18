<?php

// Normal assigning of variable

// $x = 1;

// $y = &$x; // $y is now an alias of $x

// echo $x . ' ' . $y . '   '; // output: 1 1

// $y = 5; // Modifying the reference variable

// echo $x . ' ' . $y . '   '; // output: 5 5

// $x = 22; // Modifying the original variable
// echo $x . ' ' . $y . '   '; // output: 18 18




$original_var = 10;
$reference_var = &$original_var; // $reference_var is now an alias of $original_var

echo "$original_var $reference_var\n"; // Output: 10 10

$reference_var = 20; // Modifying the reference variable
echo "$original_var $reference_var\n"; // Output: 20 20

$original_var = 30; // Modifying the original variable
echo "$original_var $reference_var\n"; // Output: 30 30




// function add_five($value) {
//   $value += 5;
// }

// $number = 10;
// add_five($number);
// echo $number; // Output: 15



$firstName = "EC";

echo "Hello {$firstName}";
