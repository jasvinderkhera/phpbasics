<?php

// This is how you can declare variable in PHP

$name = "Jasvinder Khera <br>";

echo $name;


// Constant

define(constant_name:'Interest', value:'45');

echo constant("Interest");

// Concatenation

$series = "Lucifier";

echo '<h1> The webseries '.$series.' is one of my favourites </h1>';


// print and echo

$a =1;
$b = 5;
$c = 7;

print $b;

echo '<h2>The print only prints a single variable</h2>';

echo $a, $b, $c;

echo '<h2>The echo can print multiple variables using comma separation.</h2>';

?>