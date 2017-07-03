
# Ping Pong PHP
##### _Epicodus version of "Fizz Buzz", July 3, 2017_

#### By Larry Taylor and Calla Rudolph

## Description

This web application allows users to input a number, and the program will count from 1 to their number with some exceptions. If a number is divisible by 3, it is replaced by "ping." If it is divisible by 5, it is replaced with "pong." If it is divisible by both 3 and 5, it will be replaced by "ping-pong." This is a practice in using Behavior Driven Development PHP with the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

## Setup

* Open GitHub site on your browser: https://github.com/CallaRudolph/php-ping-pong
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then copy the repository link and press enter
    * type 'cd php-ping-pong' to access the document root (project folder) on your computer
    * type 'composer install' to download dependencies (Silex & Twig)
    * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view address book.
* Enter in a number, and you will se your pings and pongs!
* click "Home" to return to the home page.

## Specifications
* It should inform the user to enter a positive number if the field is left blank.
    * Input: " "
    * Output: "Please fill out this field"
* It should return an error message if the user inputs a non-numeric character.
    * Input: 'e'
    * Output: 'Please enter a number'
* It should count up the inputted number.
    * Input: '2'
    * Output: '1, 2'
* It should return 'ping' for any number which is divisible by 3.
    * Input: '3'
    * Output: '1, 2, ping'
* It should return 'pong' for any number which is divisible by 5.
    * Input: '5'
    * Output: '1, 2, ping, 4, pong'
* It should return 'ping-pong' for any number divisible by both 3 and 5.
    * Input: '15'
    * Output: '1, 2, ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, ping-pong'

## Technologies Used

PHP, Silex, Twig, PHPUnit, CSS, HTML5

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Larry Taylor, Calla Rudolph_**
