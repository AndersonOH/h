
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>My Website</h1>
  <p>This is my website.</p>


<?php
// This is a comment

// Declare a variable
$name = "John Doe";

// Print the variable
echo $name;

// Conditional statements
if ($name == "John Doe") {
  echo "Hello, John Doe!";
} else {
  echo "I don't know your name.";
}

// Loops
for ($i = 0; $i < 10; $i++) {
  echo $i . " ";
}

// Functions
function add($a, $b) {
  return $a + $b;
}

echo add(5, 10);

// Classes and objects
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

$person = new Person("John Doe", 30);
$person->sayHello();

// Include and require files
include "file1.php";
require "file2.php";

// Error handling
try {
  // Code that might throw an error
} catch (Exception $e) {
  // Handle the error
}

// Database connection
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepared statements
$stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  echo $row["name"] . " " . $row["email"];
}

// MySQLi functions
$conn->query("CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255)
)");

$conn->insert("users", array("name" => "John Doe", "email" => "johndoe@example.com"));

$conn->close();

?>

</body>
</html>