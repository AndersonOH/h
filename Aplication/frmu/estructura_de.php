<?php
// Declare variables
$name = "John Doe";
$age = 30;

// Print the variables
echo $name . " is " . $age . " years old.";

// Include a file
include "file.php";

// Require a file
require "file.php";

// Define a function
function add($a, $b) {
  return $a + $b;
}

// Call the function
echo add(5, 10);

// Create a class
class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function sayHello() {
    echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }
}

// Create an object
$person = new Person("John Doe", 30);

// Call a method on the object
$person->sayHello();

// Create a database connection
$conn = new mysqli("localhost", "username", "password", "database");

// Create a table
$conn->query("CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255)
)");

// Insert a row into the table
$conn->insert("users", array("name" => "John Doe", "email" => "johndoe@example.com"));

// Select all rows from the table
$result = $conn->query("SELECT * FROM users");

// Iterate over the results
while ($row = $result->fetch_assoc()) {
  echo $row["name"] . " " . $row["email"];
}

// Close the connection
$conn->close();