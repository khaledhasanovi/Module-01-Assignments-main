<?php

// Assignment 01: Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction.


$fname = "Khaled";
$lname = "Hassan";
$age = 24;
$country = "Bangladesh";
$infoAboutMe = "This is Khaled here! I'm a WordPress developer and working a company as a Junior devloper. I want to learn laravel framework as well like WordPress. I love to learn it";

echo "This is {$fname} {$lname} and I'm {$age} years old. I live in {$country}.\nA brief about me, {$infoAboutMe}";
