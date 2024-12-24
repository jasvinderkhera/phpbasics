<?php

// strlen(): to get the length of the string

$stringx = "Hi how are you?";
 echo strlen($stringx);

 echo "<br>";
//  str_word_count(): to get the word count of the string

echo str_word_count($stringx);
echo "<br>";


// strrev(): to reverse the string
echo strrev($stringx);

echo "<br>";

// ucwords(): to uppercase the words

$name = "jasvinder khera";

echo ucwords($name);

echo "<br>";

// ucfirst(): to uppercase only first word

echo ucfirst($name);
echo "<br>";

// sha1() and md5() : to encrypt the string

echo sha1($name);

echo "<br>";

echo md5($name);
echo "<br>";


// ltrim(): to trim from last


$name = "--jasvinder";

echo ltrim($name, "--");
echo "<br>";

// str_replace: to replace words from a string or variable

$dialogue = "With great power comes great responsibility";

echo str_replace("responsibility", "Money", $dialogue);
echo "<br>";

// str_split(): String to array

$name = "Jasvinder";

print_r(str_split($name));

echo "<br>";

// Other method to print

var_dump(str_split($name));


?>