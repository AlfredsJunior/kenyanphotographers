<?php
$fullname = $email = $gender = $phone_number = $username = $password = $confirmpassword = "";
$nameErr = $emailErr = $genderErr = $phone_numbereErr =$usernameErr = $passwordErr = $confirmpasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $fullname = test_input($_POST["fullname"]);
  $phone_number = test_input($_POST["phone_number"]);
  $gender = test_input($_POST["gender"]);
  $password = test_input($_POST["password"]);
  $confirmpassword = test_input($_POST["$confirmpassword"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["fullname"])) {
   $fullnameErr = "Name is required";
 } else {
   $fullname = test_input($_POST["fullname"]);
   // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $fullnameErr = "Only letters and white space allowed";
    }
 }

 if (empty($_POST["username"])) {
   $usernameErr = "User is required";
 } else {
   $username = test_input($_POST["username"]);
   // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
 }

 if (empty($_POST["email"])) {
   $emailErr = "Email is required";
 } else {
   $email = test_input($_POST["email"]);
   // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
 }

 if (empty($_POST["phone_number"])) {
   $phone_numberErr = "Enter your phone number";
 } else {
   $phone_number = test_input($_POST["phone_number"]);
   // check if phone number only contains numbers only
if (!preg_match("/^[0-9 ]*$/",$phone_number)) {
  $phone_numberErr = "only numbers are allowed";
}
 }

 if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
 } else {
   $gender = test_input($_POST["gender"]);
 }
 if (empty($_POST["password"])) {
   $passwordErr = "";
 } else {
   $password = test_input($_POST["password"]);
 }
 if (empty($_POST["$confirmpassword"])) {
   $confirmpasswordErr = "";
 } else {
   $confirmpassword = test_input($_POST["confirmpassword"]);
 }
}

?>
