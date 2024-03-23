<?php

// Define a variable
$message = "Hello, PHP!";

// Print the message
echo $message;

// Create a function
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// Call the function
$result = addNumbers(5, 10);
echo "The result is: " . $result;

// Use a loop to print numbers
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// Use an if statement
$number = 15;
if ($number > 10) {
    echo "The number is greater than 10.";
} else {
    echo "The number is less than or equal to 10.";
}

// Define an array
$fruits = array("Apple", "Banana", "Orange");

// Loop through the array
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}

// Include another PHP file
include "another_file.php";

// Connect to a database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Close the database connection
$conn->close();

?>