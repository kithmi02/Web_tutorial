<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  $academicyear = $_POST["academicyear"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  echo "First Name: $firstname<br>";
  echo "Last Name: $lastname<br>";
  echo "Username: $username<br>";
  echo "Password: $password<br>";
  echo "Gender: $gender<br>";
  echo "Academic Year: $academicyear<br>";
  echo "Email: $email<br>";
  echo "Phone: $phone<br>";
}
?>
