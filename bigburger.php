<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "big_burger";

// Create connection
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
  }

  $sql = "INSERT INTO food (name, email, number, food_name, address)
VALUES (?, ?, ?, ?, ?)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>