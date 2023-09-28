<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register-bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if ($pass != $_POST['checkpass']) {
  echo ("НЕВЕРНЫЙ ПАРОЛЬ");
} else {
  $pass = md5($pass."jdsaioasjd9876");

  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `pass`)
  VALUES (NULL, '$name', '$email', '$pass')";

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>

        